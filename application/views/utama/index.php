<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="swiper-container hero-slider">
                    <div class="swiper-wrapper">
                        <?php 
                        $i=0;
                        foreach($baru as $item):
                        if($i==3){break;} ?>
                        <div class="swiper-slide">
                            <div class="hero-content flex justify-content-center align-items-center flex-column">
                                <img src="<?=base_url();?>assets/foto/<?=$item['gambar'];?>" alt="">
                            </div><!-- .hero-content -->
                        </div><!-- .swiper-slide -->

                        <?php 
                        $i++;
                        endforeach; ?>

                        

                    </div><!-- .swiper-wrapper -->

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z"></path></svg></span>
                    </div>
                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 44"><path d="M0,22L22,0l2.1,2.1L4.2,22l19.9,19.9L22,44L0,22L0,22L0,22z"></path></svg></span>
                    </div>
                </div><!-- .swiper-container -->
            </div><!-- .col -->
        </div><!-- .row -->
        
        
        <div class="container">
            <div class="row">
                <div class="offset-lg-9 col-12 col-lg-3">
                    <div class="img-profil">
                        <img src="<?= base_url() ?>assets/images/fotoku.jpg" class="rounded-circle" alt="">
                        <h3>Eko Tri Yustikawan</h3>
                        <p>web developer</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .hero-section -->
        

    <div class="container single-page">
        <div class="row">
            <div class="col-12 col-lg-9">
                <?php if (empty($artikel)): ?>
                    <div class="alert alert-danger mt-5" role="alert">
                        Artikel tidak di temukan
                    </div>
                <?php endif; ?>
                <?php foreach($artikel as $item): ?>
                <div class="content-wrap">
                    
                    <h2 class="entry-title"><?= $item['judul']; ?></h2>
                        <header class="entry-header">
                            <div class="posted-date">
                            <?=$item['kategori'];?> | <?=$item['tanggal'];?>  
                            </div><!-- .posted-date -->
                            <div class="posted-date">
                            <p>penulis <?=$item['penulis'];?></p>   
                            </div><!-- .posted-date -->
                    </header><!-- .entry-header -->

                    <figure class="featured-image">
                        <img src="<?=base_url();?>assets/foto/<?=$item['gambar'];?>" alt="">
                    </figure><!-- .featured-image -->

                    <div class="entry-content">
                        <p><?= $item['konten'];?></p>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer flex flex-column flex-lg-row justify-content-between align-content-start align-lg-items-center">

                        <a class="read-more order-2" href="<?= base_url(); ?>home/artikel/<?=$item['id_artikel']; ?>">Read more</a>
                    </footer><!-- .entry-footer -->
                </div><!-- .content-wrap -->
                <?php endforeach; ?>
                <?=$this->pagination->create_links(); ?>
            </div><!-- .col -->

            <div class="col-12 col-lg-3">
                <div class="sidebar">
                        <div class="header-bar-search d-none d-lg-block">
                                <form action="<?= base_url('home');?>" method="post">
                                    <input type="search" placeholder="Search" name="keyword" autocomplete="off">
                                <div class="input-group-append">
                                    <input class="" type="submit" hidden name="submit">
                                </div>
                                </form>
                            </div><!-- .header-bar-search -->
                    <div class="">
                        <h3>Kategori</h3>
                        <div class="tags-list">
                            <?php foreach($kategori as $item): ?>
                                <a href="<?= base_url(); ?>home/kategori/<?=$item['id_kat'];?>"><?= $item['kategori']; ?></a>
                                <!-- <a href="#">Pendidikan</a>
                                <a href="#">komik</a>
                                <a href="#">novel</a>
                                <a href="#">majalah</a> -->
                            <?php endforeach; ?>
                            </div><!-- .tags-list -->
                    </div>
                    <div class="">
                        <h3>Berita baru</h3>
                    </div>
                    <?php 
                    $i=0;
                    foreach($baru as $item):
                    if($i==5){break;} ?>
                    <div class="recent-posts">
                        <div class="recent-post-wrap">
                            <figure>
                                <img src="<?=base_url();?>assets/foto/<?=$item['gambar'];?>" style="background-size: cover;" alt="">
                            </figure>

                            <header class="entry-header">
                                <div class="posted-date">
                                <?=$item['kategori'];?> | <?=$item['tanggal'];?>
                                </div><!-- .entry-header -->

                                <h3><a href="<?= base_url(); ?>home/artikel/<?=$item['id_artikel']; ?>"><?=$item['judul'];?></a></h3>
                            </header><!-- .entry-header -->
                        </div><!-- .recent-post-wrap -->
                    </div><!-- .recent-posts -->
                    <?php 
                $i++;
                endforeach; ?>
                </div><!-- .sidebar -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->

<footer class="sit-footer">
<div class="container-fluid">
        <div class="row">
            <div class="footer-instagram flex flex-wrap flex-lg-nowrap">
                        <?php 
                        $i=0;
                        foreach($baru as $item):
                        if($i==4){break;} ?>
                <figure>
                    <a href="#"><img src="<?=base_url();?>assets/foto/<?=$item['gambar'];?>" alt=""></a>
                </figure>
                        <?php 
                        $i++;
                        endforeach; ?>

                <figure>
                    <a href="#"><img src="images/b.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/c.jpg" alt=""></a>
                </figure>

                <figure>
                        <a href="#"><img src="images/d.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/e.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/f.jpg" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="images/g.jpg" alt=""></a>
                </figure>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->

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
