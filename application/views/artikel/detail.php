<div class="container">
<div class="card mb-3">
  <img src="<?=base_url();?>assets/foto/<?=$artikel['gambar'];?>" width='100' height='100'  >
  <div class="card-body">
    <h5 class="card-title"><?= $artikel['judul']; ?></h5>
    <p class="card-text"><small class="text-muted"><?= $artikel['tanggal']; ?> | <?= $artikel['kategori']; ?> | <a href="<?=base_url() ;?>">kembali</a></small></p>
    <p class="card-text"><?= $artikel['konten']; ?></p>
  </div>
</div>
</div>