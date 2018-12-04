<?php
if ($uri_segment[5] == 'chapter') {
    include_once 'comic-detail.php';
} else {
    $serial_id = $uri_segment[4];
    $stmt = $conn->prepare("SELECT nama, genre, sinopsis, thumbnail FROM serial WHERE serial_id=$serial_id");
    $stmt->execute();

    $serial_res = $stmt->fetchAll();
    ?>
    <section class="comic-banner text-center py-5">
        <h5><?php echo $serial_res[0]['genre']; ?></h5>
        <h3><?php echo $serial_res[0]['nama'] ?></h3>
    </section>
    <div class="comic-episode-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <table class="table table-striped table-hover table-chapter">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Episode</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $stmt = $conn->prepare("SELECT * FROM episode WHERE serial_id=$serial_id");
                        $stmt->execute();

                        $result = $stmt->fetchAll();

                        foreach ($result as $index => $row) {
                            ?>
                            <tr onclick="window.location='<?php echo BASE_URL; ?>/comic/<?php echo $serial_id ?>/chapter/<?php echo $row['epsiode_id'] ?>'">
                                <th scope="row"><?php echo ++$index; ?></th>
                                <td>
                                    <img src="<?php echo getimagesize(ASSET_URL . 'images/eps/' . $row['image']) && $row['image'] != '' ? ASSET_URL . 'images/eps/' . $row['image'] : 'http://via.placeholder.com/100x100'; ?>"
                                         alt="<?php echo $row['name']; ?>" width="75px">
                                </td>
                                <td><a><?php echo $row['name']; ?></a></td>
                                <td><?php echo date_format(date_create($row['created_at']), "t M Y"); ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4">
                    <?php if($_SESSION['is_login']) { ?>
                        <a class="btn btn-primary mb-3" href="<?php echo BASE_URL . '/episode' ?>">Tambah Episode</a>
                    <?php } ?>
                    <h3><img class="mr-4" src="<?php echo ASSET_URL; ?>images/refresh.svg" alt="Updated at"
                             height="40px">Update
                        tiap hari Selasa</h3>
                    <img class="my-3" src="<?php echo getimagesize(ASSET_URL . 'images/eps/' . $serial_res[0]['thumbnail']) && $serial_res[0]['thumbnail'] != '' ? ASSET_URL . 'images/eps/' . $serial_res[0]['thumbnail'] : 'http://via.placeholder.com/100x100'; ?>" alt="<?php echo $serial_res[0]['nama'] ?>"
                         width="100%">
                    <h4>Sinopsis</h4>
                    <p>
                        <?php echo $serial_res[0]['sinopsis']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>