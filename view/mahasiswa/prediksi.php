<?php
  require('view/template/header.php');
  require('view/template/navbar.php');
  require('view/template/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?=$title?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?=$title?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-users mr-1"></i>
                  Hasil Prediksi
              </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                </li>
              </ul>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          
                
                
                <form method="post" action=""  >
                            
                    <div class="form-group">
                        <label class="col-sm-6 col-form-label" >Nama Mahasiswa</label>
                        <div class="col-sm-6">
                            <input type="text" name="nama_mahasiswa" class="form-control" placeholder="" required>
                        </div>
                    </div>  
                    
                    <div class="form-group">
                        <label class="col-sm-6 col-form-label" >NIM</label>
                        <div class="col-sm-6">
                            <input type="number" name="nim" class="form-control" placeholder="" required>
                        </div>
                    </div>  
                    
                    <div class="form-group">
                        <label class="col-sm-6 col-form-label" >Nilai Akhir</label>
                        <div class="col-sm-6">
                            <input type="nilai_akhir" name="nilai_akhir" class="form-control" placeholder="" required>
                        </div>
                    </div>  
                    
                    <div class="form-group">
                        <label class="col-sm-6 col-form-label" >IPK Akhir</label>
                        <div class="col-sm-6">
                            <input type="text" name="ipk_akhir" class="form-control" placeholder="" required>
                        </div>
                    </div>  
                    
                    <div class="form-group">
                        <label class="col-sm-6 col-form-label" >Feedback Dosen</label>
                        <div class="col-sm-6">
                            <textarea name="feedback_dosen" class="form-control" placeholder="" required></textarea>
                        </div>
                    </div>  
                        
                    
                        
                    </form>
          </div>
              <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
  require('view/template/footer.php');