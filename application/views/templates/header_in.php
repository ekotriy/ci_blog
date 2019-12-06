<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $judul; ?></title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
    <style>
    @font-face {
    font-family: 'HelveticaNeueLTPro-Md';
    src: url('<?= base_url() ?>assets/fonts/fonts/HelveticaNeueLTPro-Md.eot?#iefix') format('embedded-opentype'),
    url('<?= base_url() ?>assets/fonts/fonts/HelveticaNeueLTPro-Md.otf')  format('opentype'),
    url('<?= base_url() ?>assets/fonts/fonts/HelveticaNeueLTPro-Md.woff') format('woff'),
    url('<?= base_url() ?>assets/fonts/fonts/HelveticaNeueLTPro-Md.ttf')  format('truetype'),
    url('<?= base_url() ?>assets/fonts/fonts/HelveticaNeueLTPro-Md.svg#HelveticaNeueLTPro-Md') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'BeyondTheMountains';
    src: url('<?= base_url() ?>assets/fonts/fonts/BeyondTheMountains.eot?#iefix') format('embedded-opentype'),
    url('<?= base_url() ?>assets/fonts/fonts/BeyondTheMountains.otf')  format('opentype'),
    url('<?= base_url() ?>assets/fonts/fonts/BeyondTheMountains.woff') format('woff'),
    url('<?= base_url() ?>assets/fonts/fonts/BeyondTheMountains.ttf')  format('truetype'),
    url('<?= base_url() ?>assets/fonts/fonts/BeyondTheMountains.svg#BeyondTheMountains') format('svg');
    font-weight: normal;
    font-style: normal;
}
    </style>
</head>
<body>
<div class="outer-container">
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 flex align-items-center">
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 flex justify-content-between justify-content-lg-end align-items-center">

                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .top-header-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-branding flex flex-column align-items-center">
                        <h1 class="site-title">Eko Tri Y</h1>
                        <p class="site-description">Personal Blog</p>
                    </div><!-- .site-branding -->

                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul class="flex-lg flex-lg-row justify-content-lg-center align-content-lg-center">
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="<?=base_url();?>home/about">about me</a></li>
                            <li><a href="<?=base_url();?>home/contact">Contact</a></li>
                            <li><a href="<?= base_url() ?>admin">Login</a></li>
                        </ul>

                        <div class="header-bar-search d-lg-none">
                        <form action="<?= base_url('home');?>" method="post">
                                    <input type="search" placeholder="Search" name="keyword" autocomplete="off">
                                <div class="input-group-append">
                                    <input class="" type="submit" hidden name="submit">
                                </div>
                                </form>
                        </div><!-- .header-bar-search -->
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </header><!-- .site-header -->

    
        <!-- akhir copy -->
