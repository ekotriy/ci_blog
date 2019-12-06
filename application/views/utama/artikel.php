
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-header flex justify-content-center align-items-center" style="background-image: url('<?= base_url() ?>assets/images/img6.jpg')">
                    <h1>The Story</h1>
                </div><!-- .page-header -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .hero-section -->

    <div class="container single-page blog-page">
        <div class="row">
            <div class="col-12">
                <div class="content-wrap">
                    <header class="entry-header">
                        
                        <h2 class="entry-title"><?=$artikel['judul'];?></h2>
                            <div class="posted-date">
                                <?= $artikel['kategori']; ?> | <?= $artikel['tanggal']; ?>
                            </div><!-- .posted-date -->
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="<?=base_url();?>assets/foto/<?=$artikel['gambar'];?>" alt="">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                       <?= $artikel['konten']; ?>
                </div><!-- .content-wrap -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->


<footer class="sit-footer">

    <div class="footer-bar">
        <div class="outer-container">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- .footer-copyright -->
                    </div><!-- .col-xl-4 -->

                    <div class="col-12 col-md-6">
                        <div class="footer-social">
                        </div><!-- .footer-social -->
                    </div><!-- .col-xl-4 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .outer-container -->
    </div><!-- .footer-bar -->
</footer><!-- .sit-footer -->