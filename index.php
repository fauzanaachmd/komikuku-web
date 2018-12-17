<?php

//ini_set('display_errors', 0);
//ini_set('display_startup_errors', 0);
//error_reporting(0);

include_once 'constant.php';
include_once 'action/connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Komikuku Web Apps</title>
    <link rel="stylesheet" href="<?php echo ASSET_URL; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo ASSET_URL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSET_URL; ?>css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo ASSET_URL; ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo ASSET_URL; ?>css/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Komikuku</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item <?php echo $uri_segment[3] == '' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo BASE_URL ?>">Home</a>
            </li>
            <li class="nav-item <?php echo $uri_segment[3] == 'about-us' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo BASE_URL . '/about-us'; ?>">About Us</a>
            </li>
            <li class="nav-item <?php echo $uri_segment[3] == 'publish' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo BASE_URL ?>/publish">Publish</a>
            </li>
            <?php if (isset($_SESSION['is_login']) && $_SESSION['is_login']) { ?>
                <li class="nav-item dropdown <?php echo $uri_segment[3] == 'profile' ? 'active' : ''; ?>">
                    <a class="nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       href="#">Hi, <?php $fullname = explode(' ', $_SESSION['nama']);
                        echo $fullname[0]; ?></a>
                    <div class="dropdown-menu" id="profileDropdwn">
                        <a class="dropdown-item" href="<?php echo BASE_URL; ?>/profile">Profile</a>
                        <a class="dropdown-item" href="<?php echo ASSET_URL; ?>/action/signOutProcess.php">Sign Out</a>
                    </div>
                </li>
            <?php } else { ?>
                <li class="nav-item <?php echo $uri_segment[3] == 'sign-in' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?php echo BASE_URL ?>/sign-in">Sign In</a>
                </li>
            <?php } ?>
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
    </div>
</nav>
<div class="wrapper">
    <?php
    if ($uri_segment[3] == '') {
        include_once 'pages/home.php';
    } else {
        include_once 'pages/' . $uri_segment[3] . '.php';
    }
    ?>
</div>
<footer class="bg-dark py-5 <?php echo $uri_segment[3] == 'sign-in' ? 'fixed-bottom' : ''; ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Komikuku</a>
            </div>
            <div class="col-sm-4">
                <table class="footer-menu" cellpadding="5px">
                    <tr>
                        <td>
                            <a href="index.html">Home</a>
                        </td>
                        <td>
                            <a href="#">Blog</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">About</a>
                        </td>
                        <td>
                            <a href="#">Terms &amp; Conditions</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">Contact Us</a>
                        </td>
                        <td>
                            <a href="#">Privacy Policy</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-sm-8">
                            <input class="form-control" type="email" placeholder="you.email@mail.com">
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-unstyled socmed mt-4">
                                <li>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

<?php
if ($_GET['register'] == 'success') {
    echo modal('Registration Success', 'Now you can sign in with your account. Enjoy read.');
} elseif ($_GET['register'] == 'emailNotAvailable') {
    echo modal('Failed To Register', 'Email already registered');
} elseif ($_GET['register'] == 'noEmail') {
    echo modal('No Email', 'There is no email like that, pelase sign up before');
}

if($_GET['message']=='success') {
    echo modal('Update Success', 'Profil Anda berhasil diubah.');
}elseif($_GET['message']=='failed') {
    echo modal('Update Failed', 'Password lama Anda salah.');
}
?>

<script type="text/javascript" src="<?php echo ASSET_URL; ?>js/jquery-3.3.1.min.js"></script>
<!--<script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>-->
<!--<script src="--><?php //echo ASSET_URL; ?><!--js/popper.min.js" type="text/javascript"></script>-->
<script type="text/javascript" src="<?php echo ASSET_URL; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo ASSET_URL; ?>js/slick.js"></script>
<script type="text/javascript" src="<?php echo ASSET_URL; ?>js/dropzone.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.slideshow').slick({
            dots: true,
            infinite: true,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            adaptiveHeight: true,
            slideToShow: 1,
            slideToScroll: 1
        });

        $('.slideshow-chapter').slick({
            arrows: true
        });

        <?php if($uri_segment[3] == 'sign-in' || $uri_segment[3] == 'sign-up' || $uri_segment[3] == 'profile') { ?>
        $('.form-text').hide();
        $('#confirm-password, #password').on('change paste keyup', function () {
            var pass = $('#password').val();
            var confirmPass = $('#confirm-password').val();
            if (pass === confirmPass) {
                $('#password-message').hide();
            } else {
                $('#password-message').fadeIn();
            }
        });
        <?php } ?>

        <?php if(isset($_GET['register']) || isset($_GET['message'])) { ?>
        $('#register-modal').modal('show');
        <?php }?>
    });
</script>
</body>
</html>