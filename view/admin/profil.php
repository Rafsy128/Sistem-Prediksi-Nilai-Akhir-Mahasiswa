<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profil Pengguna</title>
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
</head>
<body>
  <div class="container">
    <div class="profil card p-3">
      <?php
      // Data profil pengguna (contoh)
      $nama = "John Doe";
      $deskripsi = "Seorang pengguna aktif di dunia web.";
      $email = "john@example.com";
      $lokasi = "Kota A, Negara X";
      $gambar = "link_gambar_profil.jpg"; // Ganti dengan alamat gambar yang valid
      ?>
      <img src="<?php echo $gambar; ?>" class="card-img-top" alt="Gambar Profil">
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
</html>
