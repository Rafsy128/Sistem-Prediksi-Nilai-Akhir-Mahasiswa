<?php
require('view/template/header.php');
require('view/template/navbar.php');
require('view/template/sidebar.php');

require_once "helper/helper.php";

require_once "model/Mahasiswa.php";
$mahasiswaModel = new Mahasiswa;
$data = $mahasiswaModel->get(["orderby" => "id_mhs DESC"]);

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
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
            Dashboard
          </h3>
          <div class="card-tools">
            <ul class="nav nav-pills ml-auto">
              <li class="nav-item">
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> -->
                  <!-- <i class="fas fa-plus"></i> -->
                <!-- </button> -->
                <a href="?export&excel&mhs" class="btn btn-success"><i class="fas fa-print"></i> Export Excel</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">

            <div class="row">
              <div class="col-lg-12">
                <h1 class="page-header">Data Mahasiswa</h1>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-18">
                <div class="panel panel-default">
                  <div class="panel-body">

                      <?php if (hasSuccess() || hasError()) : ?>
                        <div class="alert <?= hasSuccess() ? "alert-success" : "alert-danger" ?>">
                          <?= hasSuccess() ? success() : error(); ?>
                        </div>
                      <?php endif; ?>

                    <div class="table-responsive">


                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr class="odd gradeX">
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Semester</th>
                            <th>IPS</th>
                            <th>IPK</th>
                            <th>mata kuliah mengulang</th>
                            <th>mata kuliah terlambat</th>
                            <th>Penghasilan Orang Tua</th>
                            <th>Jenis Kelamin</th>
                            <th>Beasiswa</th>
                            <td>Aksi</td>
                          </tr>
                        </thead>

                        <tbody>
                          <?php foreach ($data as $item) : ?>
                            <tr>
                              <td>
                                <?= $item["nim"] ?>
                              </td>
                              <td>
                                <?= $item["nama"] ?>
                              </td>
                              <td>
                                <?= $item["semester"] ?>
                              </td>
                              <td>
                                <?= $item["ips"] ?>
                              </td>
                              <td>
                                <?= $item["ipk"] ?>
                              </td>
                              <td>
                                <?= $item["mk_mengulang"] ?>
                              </td>
                              <td>
                                <?= $item["mk_terlambat"] ?>
                              </td>
                              <td>
                                <?= $item["penghasilan"] ?>
                              </td>
                              <td>
                                <?= $item["jk"] == "L" ? "Laki - Laki" : "Perempuan"; ?>
                              </td>
                              <td>
                                <?= $item["beasiswa"] == 1 ? "Dapat" : "Tidak Dapat"; ?> Beasiswa
                              </td>
                              <td>
                                <a href="?editMhs&id=<?= $item["id_mhs"] ?>" class="btn btn-sm btn-secondary">Edit</a>
                                <a onclick="return confirm('Apakah Anda Yakin Menghapus?')" href="?hapusMhs&id=<?= $item["id_mhs"] ?>" class="btn btn-sm btn-danger">Hapus</a>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php
            require('view/template/footer.php');
            ?>