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
    <section class="content">
      <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-users mr-1"></i>
                  Prediksi Nilai Akhir Mahasiswa 
              </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <br>

                                   <!-- Form Mahasiswa -->
                                   <form id="mahasiswa" action="" method="POST">
                            
                            <div class="col-lg-4">
                              
                                <input type='text' name='nim' id='auto' class="form-control" placeholder="--Cari NIM Mahasiswa--">
  
                            <br>
                               <button class="btn btn-primary" type="submit" name="search">
                                  <i class="fa fa-search"></i> search
                               </button>
  
                            </form>
  
  
                            <div class="col-lg-4">
                                <a href="?page=predictName">Cari Nama</a>
                             </div>   
                             </div>
                             <br><br>
                     <div class="panel panel-default">
                        <div class="panel-body">
                             <div class="row">
                                <form id="form-predict">
                                <table class="table table-striped table-bordered table-hover table-responsive" id="predict">
                                    <thead>
                                        <tr class="odd gradeX">
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>IPS terakhir</th>
                                            <th>IPK terakhir</th>
                                            <th>semester</th>
                                            <th>Prediksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><input type="text" id="ipk" name="ipk" class="form-control" size="10" value=""></td>
                                            <input type="hidden" name="nim" value="">
                                            <input type="hidden" name="beasiswa" value="">
                                            <td><input type="text" id="semester" name="semester" class="form-control" size="10" value=""></td>
                                            <td><input type="text" id="penghasilan" name="id_penghasilan" class="form-control" size="10" value=""></td>
                                            <td><input type="text" id="jarak" name="jarak" class="form-control" size="10" value=""></td>
                                            <td><input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" size="10" value=""></td>
                                              <input type="hidden" name="fakta" value="<?php echo $row['fakta']; ?>">
                                              <input type="hidden" name="lulus" value="<?php echo $row['lulus']; ?>">
                                               
                                            <td><input type="submit"  class="btn btn-primary" value="Predict"></td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                  </table>
                                 </form>
                               </div>
                              </div>
                            </div>
                        </div>
                            
                        </div>
          
          
    
                   

<?php
  require('view/template/footer.php');