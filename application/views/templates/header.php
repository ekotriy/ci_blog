<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- My CSS-->
     <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">

     <!-- Icon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <title><?= $judul; ?></title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
          <a class="navbar-brand" href="<?=base_url();?>admin">CI-Mahasiswa</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(); ?>">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url();?>kategori">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url();?>about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">          
                    <li class="nav-item dropdown">             
                        <a class="nav-link dropdown-toggle" href="#" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                
                            <i class="fa fa-user"></i> Administrator             
                        </a>             
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">                
                            <a class="dropdown-item" href="#">Profil</a>                
                            <a class="dropdown-item" href="#">Ganti Password</a>                
                            <div class="dropdown-divider"></div>                
                            <a class="dropdown-item" href="<?=site_url('admin/logout'); ?>">Logout</a>             
                        </div>          
                    </li>       
                </ul>
            </div>
        </div>
</nav>