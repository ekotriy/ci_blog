  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= base_url() ?>assets/images/fotoku.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Eko Tri Yustikawan</h3>

                <p class="text-muted text-center">Web Developer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Nim</b> <a class="float-right">E21182392</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Universitas</strong>

                <p class="text-muted">
                  Akademi Komunitas Negeri Nganjuk
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                <p class="text-muted">Nganjuk</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                Meh sembarang iso
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
               <h3>Fitur</h3>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Halaman Statis</h4>
                        </span>
                      </div>
                      <p>
                        Halaman statis yang responsif muncul saat pertama kali mengunjungi halaman blog. 
                      </p>
                      <!-- /.user-block -->
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Galeri</h4>
                        </span>
                      </div>
                      <p>
                        Galari foto artikel.
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-12">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/galeri.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>WYSIWYG</h4>
                        </span>
                      </div>
                      <p>
                        Fitur wysiwyg editor pada halaman tambah artikel dan edit artikel.
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-12">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/wysiwyg.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Menampilkan Data User</h4>
                        </span>
                      </div>
                      <p>
                        Menampilkan data user yang sedang login pada halaman profil dan nama user akan tampil pada artikel yang ditulisnya.
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/profil.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/penulis.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Menampilkan Artikel Berdasarkan Tanggal Terakhir</h4>
                        </span>
                      </div>
                      <p>
                        Artikel yang tampil berdasarkan tanggal terakhir yang berada di halaman utama.
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Menampilkan Dafter Artikel Terbaru</h4>
                        </span>
                      </div>
                      <p>
                        Artikel terbaru tampil di sebalah kanan.
                      </p>
                      <div class="row mb-3">
                        <div class="col-sm-12">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/baru.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Fitur Pencarian</h4>
                        </span>
                      </div>
                      <p>
                        Mencari artikel berdasarkan judul artikel,isi artikel, dan tanggal artikel dangan format menulisan tanggal "tahun-bulan-tanggal". 
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-12">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/cari.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Daftar Kategori</h4>
                        </span>
                      </div>
                      <p>
                        Menampilkan daftar kategori yang terkait.
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-12">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/cari.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Slideshow</h4>
                        </span>
                      </div>
                      <p>
                        Menampilkan slideshow pada halaman utama.
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-12">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/slideshow.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Pagination</h4>
                        </span>
                      </div>
                      <p>
                        Menampilkan halaman artikel berikutnya.
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-12">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/pagination.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                    <div class="post">
                      <div class="user-block">
                        <span class="username">
                          <h4>Menampilkan Detail Artikel</h4>
                        </span>
                      </div>
                      <p>
                        Klik tombol read more untuk membaca artikel secara penuh.
                      </p>
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-12">
                          <img class="img-fluid" src="<?= base_url() ?>assets/images/detai.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                  </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>