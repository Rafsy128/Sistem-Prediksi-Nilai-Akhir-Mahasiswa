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
                  Konfigurasi
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
                    <div class="row">
                        <div class="col">
                            
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" >Learning Rate</label>
                                <div class="col-sm-6">
                                    <input type="text" name="rate" class="form-control" placeholder="" required>
                                </div>
                            </div>  
                        </div>
                        <div class="col">
                            
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" >Epoch</label>
                                <div class="col-sm-6">
                                    <input type="number" name="epoch" class="form-control" placeholder="" required>
                                </div>
                            </div>  

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" >Decrease Learning Rate</label>
                                <div class="col-sm-6">
                                    <input type="text" name="decrease" class="form-control" placeholder="" required>
                                </div>
                            </div>  
                        </div>
                        <div class="col">
                            
                            <div class="form-group">
                                <label class="col-sm-6 col-form-label" >Open File</label>
                                <div class="col-sm-6">
                                    <input type="file" name="file" class="form-control" placeholder="" required>
                                </div>
                            </div>  

                        </div>
                    </div> 
                    
                    <input  type="submit" class="btn btn-primary" value="Process">
                        
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