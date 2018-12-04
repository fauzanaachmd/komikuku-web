<?php
if ($_SESSION['is_login']) {

    if ($uri_segment[4] == 'create-serial') {
        include_once 'create-serial.php';
    } else {
        ?>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-3" align="center">Serial Komik Buatan Anda</h2>
                    <p align="center">Berikut adalah daftar serial yang pernah anda buat selama ini. Anda bisa </p>
                    <div class="text-center">
                        <a class="btn btn-primary" href="<?php echo BASE_URL; ?>/publish/create-serial">Tambah Serial Baru</a>
                    </div>
                    <table class="table table-striped mt-5 table-hover table-chapter">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Genre</th>
                            <th>Jumlah Episode</th>
                            <th>Tanggal dibuat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $stmt = $conn->prepare("SELECT a.*, COUNT(b.serial_id) as 'jmlEpisode' FROM serial a LEFT JOIN episode b ON a.serial_id=b.serial_id WHERE a.user_id=$user_id GROUP BY a.serial_id");
                        $stmt->execute();

                        $result = $stmt->fetchAll();

                        foreach($result as $row) {
                            ?>
                            <tr onclick="window.location='<?php echo BASE_URL; ?>/comic/<?php echo $row['serial_id'] ?>'">
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['genre']; ?></td>
                                <td><?php echo $row['jmlEpisode']; ?></td>
                                <td><?php echo date_format(date_create($row['created_at']), "t M Y"); ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php }
} else { ?>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <img width="100%" class="mb-5" src="<?php echo ASSET_URL; ?>/images/undraw_authentication_fsn5.svg"
                     alt="Login before publish komik">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>
                    You have to login first before publish a comic. <a href="<?php echo BASE_URL; ?>/sign-in">Login
                        here</a>
                </p>
            </div>
        </div>
    </div>
<?php } ?>