  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <h1>Artikel</h1>
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
          <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Daftar Artikel</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                      <?php foreach($artikel as $artikel): ?>
                    <div class="col-sm-4 mb-3">
                      <div class="position-relative p-3 bg-gray" style="height: 180px;background : url(<?=base_url();?>assets/foto/<?=$artikel['gambar'];?>);background-size: cover;">
                        <div class="ribbon-wrapper">
                        </div>

                        <h5 style="color:#63502c !important;font-weight: bold; "><?= $artikel['judul']; ?></h5>
                        <a href="<?= base_url(); ?>home/artikel/<?=$artikel['id_artikel']; ?>" class="small-box-footer" style="color:#63502c !important;font-weight: bold;">More info <i class="fas fa-arrow-circle-right"></i></a><br>
                        <a href="<?=base_url()?>artikel/edit/<?=$artikel['id_artikel'];?>" class="small-box-footer" style="color:#63502c !important;font-weight: bold;">Edit <i class="fas fa-arrow-circle-right"></i></a><br>
                        <a href="<?=base_url()?>artikel/hapus/<?=$artikel['id_artikel'];?>" class="small-box-footer tombol-hapus" style="color:#63502c !important;font-weight: bold;">Hapus <i class="fas fa-arrow-circle-right"></i></a>

                      </div>
                    </div>
                      <?php endforeach; ?>
                  </div>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->