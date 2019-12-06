  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kategori</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $a=0;
                    foreach($kategori as $item): 
                    $a++?>
                    <tr>
                      <td><?= $a; ?></td>
                      <td><?= $item['kategori']; ?></td>
                      <td>
                      <a href="<?=  base_url();?>kategori/detail/<?=$item['id_kat'];?>" class="btn btn-primary" role="button" >Detail</a>
                      <a href="<?=  base_url();?>kategori/edit/<?=$item['id_kat'];?>" class="btn btn-warning" role="button" >Edit</a>
                      <a href="<?=  base_url();?>kategori/hapus/<?=$item['id_kat'];?>" class="btn btn-danger tombol-hapus" role="button" >Hapus</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>