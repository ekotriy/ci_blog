<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah artikel</h1>
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
                Tulis ceritamu
                <small></small>
              </h3>
            </div>
            <div class="card card-default">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-7">
              <?php echo form_open_multipart('artikel/tambah'); ?>
                    <!-- id -->
                    <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                    <!-- akhir id -->
                    <!-- judul -->
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Tulis judul artikel" autocomplete="off" name="judul">
                        <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                    </div>
                    <!-- akhir judul -->

                    <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control select2" id="kategori" name="kategori">
                            <?php foreach($artikel as $item): ?>  
                             <option value="<?=$item['id_kat'] ?>"><?=$item['kategori']?></option>
                            <?php endforeach; ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="fileGambar">Upload gambar</label>
                        <input type="file" class="form-control-file" id="fileGambar" name="gambar">
                    </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-body pad">
                            <div class="mb-3">
                            <small class="form-text text-danger"><?= form_error('konten'); ?></small>
                                <textarea class="textarea" name="konten" placeholder="Place some text here"
                                        style="width: 100%; height: 800px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" name="submit"class="btn btn-primary float-right">Tambah Artikel</button>
                        </div>
                      </div>
                    </div>
                </form>
                <!-- /.form-group -->
              
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            
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