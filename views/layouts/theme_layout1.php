<?php

/* @var $this \yii\web\View */
use yii\helpers\Url;

/* @var $content string */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Favourites</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicon -->
    <link href="<?= Yii::$app->request->baseUrl ?>/assets_theme/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/font-awesome/css/font-awesome.min.css"
          rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= Yii::$app->request->baseUrl ?>/assets_theme/css/style.css" rel="stylesheet">
    <link href="<?= Yii::$app->request->baseUrl ?>/css/sticky_footer.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Bell
      Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<!-- Page Content
================================================== -->


<!-- Header -->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="<?= Url::to(['/']) ?>">
                <img src="<?= Yii::$app->homeUrl ?>/assets_theme/img/logo-nav.png" alt="" title=""/>
            </a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Bell</a></h1>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="<?= Url::to(['site/index'])?>">Home</a></li>
                <?php
                if (Yii::$app->controller->id == "site" && Yii::$app->controller->action->id == "index") {
                    ?>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <?php
                } ?>
                <li><a href="<?= Url::to(['/subscription/index'])?>">Subscriptions</a></li>
                <?php
                if (Yii::$app->controller->action->id != "search") {
                    ?>
                    <?php if (Yii::$app->user->isGuest) { ?>
                        <li><a href="<?= Url::to(['/user/login'])?>">Login</a></li>
                        <li><a href="<?= Url::to(['/user/register'])?>">Sign Up</a></li>
                    <?php } else { ?>
                        <li><a href="<?= Url::to(['/site/logout'])?>">Logout (<?= Yii::$app->user->identity->username ?>)</a></li>
                    <?php } ?>
                    <?php
                } ?>
            </ul>
        </nav><!-- #nav-menu-container -->

        <nav class="nav social-nav pull-right hidden-sm-down">
            <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                        class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
        </nav>
    </div>
</header><!-- #header -->

<center>
    <br/>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?= $content ?>
        </div>
        <div class="col-md-4"></div>
    </div>
</center>

<footer class="site-footer">
    <div class="bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-xs-12 text-lg-left text-center">
                    <p class="copyright-text">
                        © My Favourites
                    </p>
                    <div class="credits">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a> <!-- JavaScript


    <!-- Required JavaScript Libraries -->
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/jquery/jquery.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/superfish/hoverIntent.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/superfish/superfish.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/tether/js/tether.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/stellar/stellar.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/counterup/counterup.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/waypoints/waypoints.min.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/easing/easing.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/stickyjs/sticky.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/parallax/parallax.js"></script>
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/lib/lockfixed/lockfixed.min.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/js/custom.js"></script>

<script src="<?= Yii::$app->request->baseUrl ?>/assets_theme/contactform/contactform.js"></script>

</body>
</html>