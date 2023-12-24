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
                  Dashboard
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
          <!-- /.card-header -->
          <div class="card-body">
          
            <div class="card bg-gradient-success">
                <h2>PREDIKSI NILAI AKHIR MAHASISWA-ARTIFICIAL INTELEGENCE</h>
            </div>
                <!-- Panggil file Bootstrap CSS -->
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <style>
    /* Gaya tambahan jika diperlukan */
    .profil {
      max-width: 300px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .profil img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
    }
    .nama {
      font-size: 24px;
      margin-bottom: 10px;
    }
    .deskripsi {
      font-style: italic;
    }
  </style>
<div class="container">
<div class="profil card p-3">
      <?php
      // Data profil pengguna 
      $nama = "Admin";
      $deskripsi = "Susi indrayani oktavia gulo S.t";
      $email = "susigulo27@gmail.com";
      $lokasi = "tembesi";
      $gambar = "jennie.jpg";
      ?>
      <img src="<?php echo $gambar; ?>" class="card-img-top" alt = "gambar profil">
      <div class="card-body">
        <h1 class="card-title nama"><?php echo $nama; ?></h1>
        <p class="card-text deskripsi"><?php echo $deskripsi; ?></p>
        <p class="card-text"><small class="text-muted">Email: <?php echo $email; ?></small></p>
        <p class="card-text"><small class="text-muted">Lokasi: <?php echo $lokasi; ?></small></p>
        <!-- Tambahkan informasi profil lainnya sesuai kebutuhan -->
      </div>
    </div>
  </div>

  <!-- Panggil file Bootstrap JS (jika diperlukan) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
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