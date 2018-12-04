<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="slideshow py-4">
                    <?php
                    $slidestmt = $conn->prepare("SELECT a.*, b.nama, b.genre FROM slide_banner a JOIN serial b ON a.serial_id=b.serial_id ORDER BY a.created_at DESC LIMIT 0,4");
                    $slidestmt->execute();

                    $result = $slidestmt->fetchAll();

                    foreach($result as $row) {
                    ?>
                    <div>
                        <div class="row align-items-center">
                            <div class="col-sm-8">
                                <img src="<?php echo getimagesize(ASSET_URL . 'images/eps/' . $row['image_Banner']) && $row['image_Banner'] != '' ? ASSET_URL . 'images/eps/' . $row['image_Banner'] : 'http://via.placeholder.com/1024x500'; ?>" alt="<?php echo $row['nama'] ?>" width="100%">
                            </div>
                            <div class="col-sm-4">
                                <h5><?php echo $row['genre']; ?></h5>
                                <h3><?php echo $row['nama'] ?></h3>
                                <a href="<?php echo BASE_URL; ?>/comic/<?php echo $row['serial_id'] ?>" class="btn btn-primary">Read Now</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="hot-comics">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-title" align="center">Hot Comics</h1>
            </div>
            <div class="row no-gutters">
                <div class="col-sm-4 hot-comics-item">
                    <a href="#">
                        <img src="http://via.placeholder.com/400x400" alt="image 1" width="100%">
                        <div class="hot-comics-item-content">
                            <h3 class="m-0">Judul Komiknya</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 hot-comics-item">
                    <a href="#">
                        <img src="http://via.placeholder.com/400x400" alt="image 1" width="100%">
                        <div class="hot-comics-item-content">
                            <h3 class="m-0">Judul Komiknya</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 hot-comics-item">
                    <a href="#">
                        <img src="http://via.placeholder.com/400x400" alt="image 1" width="100%">
                        <div class="hot-comics-item-content">
                            <h3 class="m-0">Judul Komiknya</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 hot-comics-item">
                    <a href="#">
                        <img src="http://via.placeholder.com/400x400" alt="image 1" width="100%">
                        <div class="hot-comics-item-content">
                            <h3 class="m-0">Judul Komiknya</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-8 hot-comics-item">
                    <a href="#">
                        <img src="http://via.placeholder.com/760x380" alt="image 1" width="100%">
                        <div class="hot-comics-item-content">
                            <h3 class="m-0">Judul Komiknya</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fresh-coming">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section-title" align="center">Fresh Coming Comics</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-sm-center">
                <img class="rounded-circle mb-5" width="200px" src="images/400x400.png" alt="Foto komik fresh coming">
                <h3>Judul Komik Fresh </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolores eaque eius est excepturi facere fugiat harum iure libero maiores minus nemo nesciunt porro provident quidem saepe, vel. Delectus, eius.
                </p>
            </div>
            <div class="col-sm-4 text-sm-center">
                <img class="rounded-circle mb-5" width="200px" src="images/400x400.png" alt="Foto komik fresh coming">
                <h3>Judul Komik Fresh </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolores eaque eius est excepturi facere fugiat harum iure libero maiores minus nemo nesciunt porro provident quidem saepe, vel. Delectus, eius.
                </p>
            </div>
            <div class="col-sm-4 text-sm-center">
                <img class="rounded-circle mb-5" width="200px" src="images/400x400.png" alt="Foto komik fresh coming">
                <h3>Judul Komik Fresh </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolores eaque eius est excepturi facere fugiat harum iure libero maiores minus nemo nesciunt porro provident quidem saepe, vel. Delectus, eius.
                </p>
            </div>
        </div>
    </div>
</section>