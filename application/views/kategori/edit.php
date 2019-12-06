<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kategori</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Ubah kategori
                <small></small>
              </h3>
            </div>
            <div class="card card-default">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-7">
                  <form action="" method="post">
                    <!-- id kategori -->
                    <div class="form-group">
                        <label for="idkat">Id kategori</label>
                        <input type="text" class="form-control" id="idkat" aria-describedby="emailHelp" placeholder="Tulis id kategori" autocomplete="off" name="id_kat" value="<?= $kategori['id_kat'];?>">
                    </div>
                    <!-- akhir id kategori -->
                    <!-- kategori -->
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" aria-describedby="emailHelp" placeholder="Tulis nama kategori" autocomplete="off" name="kategori" value="<?= $kategori['kategori'];?>">
                    </div>
                    <!-- akhir kategori -->
                    </div>
                    <div class="col-md-12">
                    <div class="col-md-2">
                       <button type="submit" name="submit"class="btn btn-primary float-right">Edit Kategori</button>
                    </div>
                    </div> 

                </form>
                <!-- /.form-group -->
              
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            
            
          </div>
          <!-- /.card-body -->
        </div>
            <!-- /.card-header -->
            
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>