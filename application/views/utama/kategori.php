<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-header flex justify-content-center align-items-center" style="background-image: url('<?= base_url() ?>assets/images/img3.jpg')">
                    <h1>Artikel</h1>
                </div><!-- .page-header -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .hero-section -->


    <div class="container single-page">
        <div class="row">
            <div class="col-12 col-lg-9">
                <?php foreach($kategori as $item): ?>
                <div class="content-wrap">
                    
                    <h2 class="entry-title"><?= $item['judul']; ?></h2>
                        <header class="entry-header">
                            <div class="posted-date">
                            <?=$item['kategori'];?> | <?=$item['tanggal'];?>  
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
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .outer-container -->