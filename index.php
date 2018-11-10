<?php
    include_once 'constant.php';
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
    <a class="navbar-brand" href="#">Komikuku</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item <?php echo $uri_segment[3] == '' ? 'active':''; ?>">
                <a class="nav-link" href="<?php echo BASE_URL ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php echo $uri_segment[3] == 'publish' ? 'active':''; ?>">
                <a class="nav-link" href="<?php echo BASE_URL ?>/publish">Publish</a>
            </li>
            <li class="nav-item <?php echo $uri_segment[3] == 'sign-in' ? 'active':''; ?>">
                <a class="nav-link" href="<?php echo BASE_URL ?>/sign-in">Sign In</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<?php
    if($uri_segment[3] == 'sign-in') {
        include_once 'pages/sign-in.php';
    }elseif($uri_segment[3] == 'comic') {
        include_once 'pages/comic.php';
    }else{
        include_once 'pages/home.php';
    }
?>
<footer class="bg-dark py-5">
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

<script type="text/javascript" src="<?php echo ASSET_URL; ?>js/jquery-3.3.1.min.js"></script>
<!--<script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>-->
<script src="<?php echo ASSET_URL; ?>js/popper.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo ASSET_URL; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo ASSET_URL; ?>js/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
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
    });
</script>
</body>
</html>