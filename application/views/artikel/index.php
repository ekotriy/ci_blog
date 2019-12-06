<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<!-- tambah data -->
<div class="row mt-3">
    <div class="col-md-6">
        <a href="<?= base_url();?>home/tambah" class="btn btn-primary">Tambah artikel</a>
    </div>
</div>
<!-- akhir tambah data -->

<div class="row">
    <div class="col-md-8">
        <h3>Daftar Artikel</h3>
        <div class="">
            <?php
            // $i=0; 
            foreach($artikel as $item): 
            // if($i==3){break;}
            ?>
            <div class="row">
            <h2><?= $item['judul']; ?></h2>
            <div class="row link">
                <div class="col-md-3">
                <a href="<?=base_url();?>home/edit/<?= $item['id_artikel'];?>" class="">Edit</a>
                </div>
                <div class="col-md">
                <a href="<?=base_url();?>home/hapus/<?=$item['id_artikel'];?>" class="tombol-hapus">hapus</a>
                </div>
            </div>   
            </div>  
            <footer class="blockquote-footer"><?=$item['tanggal'];?></footer>
            <div class="mb-5">
            <?= $item['konten'];?>
            <a href="<?= base_url(); ?>home/detail/<?=$item['id_artikel']; ?>">lihat selengkapnya</a>
            </div>
            <?php
            // $i++; 
            endforeach; ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Daftar Mahasiswa Jurusan
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="<?= base_url(); ?>kategori/detail/K0001">Hiburan</a></li>
                <li class="list-group-item"><a href="<?= base_url(); ?>kategori/detail/K0002">Pendidikan</a></li>
                <li class="list-group-item"><a href="<?= base_url(); ?>kategori/detail/K0003">Komik</a></li>
                <li class="list-group-item"><a href="<?= base_url(); ?>kategori/detail/K0004">Novel</a></li>
            </ul>
            
        </div>
    </div>
  </div>

</div>