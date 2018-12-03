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
                    <table class="table table-striped mt-5">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Genre</th>
                            <th>Thumbnail</th>
                            <th>Jumlah Episode</th>
                            <th>Tanggal dibuat</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $stmt = $conn->prepare("SELECT * FROM serial WHERE user_id='$user_id'");
                        $stmt->execute();

                        $result = $stmt->fetchAll();
                        print_r($result);
                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
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
