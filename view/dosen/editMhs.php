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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Edit Data Mahasiswa</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form" action="?doUpdateMhs&id=<?= $_GET["id"] ?>" method="POST">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>NIM</label>
                                                    <input type="text" name="nim" class="form-control" required="required" value="<?= $data["nim"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Mahasiswa</label>
                                                    <input type="text" name="nama" class="form-control" required="required" value="<?= $data["nama"] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Semester</label>
                                                    <select name="semester" class="form-control" required="required">
                                                        <option value="">--Pilih Semester--</option>
                                                        <?php
                                                        for ($i = 1; $i <= 6; $i++) { ?>
                                                            <option value="<?= $i ?>" <?= $i == $data["semester"] ? "selected" : "" ?>><?= $i ?></option>
                                                        <?php }

                                                        ?>
                                                    </select> </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>IPS Terakhir</label>
                                                        <input type="text" name="ips" class="form-control" required="required" value="<?= $data["ips"] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>IPK Terakhir</label>
                                                        <input type="text" name="ipk" class="form-control" required="required" value="<?= $data["ipk"] ?>">
                                                    </div>
                                                    <div class="col-lg-20">
                                                        <div class="form-group">
                                                            <label>jumlah mata kuliah mengulang</label>
                                                            <input type="text" name="mk_mengulang" class="form-control" required="required" value="<?= $data["mk_mengulang"] ?>">
                                                        </div>
                                                        <div class="col-lg-18">
                                                            <div class="form-group">
                                                                <label>jumlah mata kuliah terlambat</label>
                                                                <input type="text" name="mk_terlambat" class="form-control" required="required" value="<?= $data["mk_terlambat"] ?>">
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label>Penghasilan Orang Tua</label>
                                                                <select name="penghasilan" class="form-control" required="required">
                                                                    <option value="">--Pilih Penghasilan--</option>
                                                                    <option value="< 500.000" <?= $data["penghasilan"] == "< 500.000" ? "selected" : "" ?> >< 500.000</option>
                                                                    <option value="500.000 - 1.000.000" <?= $data["penghasilan"] == "500.000 - 1.000.000" ? "selected" : "" ?> >500.000 - 1.000.000</option>
                                                                    <option value="1.000.000 - 1.500.000" <?= $data["penghasilan"] == "1.000.000 - 1.500.000" ? "selected" : "" ?>>1.000.000 - 1.500.000</option>
                                                                    <option value="1.500.000 - 2.000.000" <?= $data["penghasilan"] == "1.500.000 - 2.000.000" ? "selected" : "" ?> >1.500.000 - 2.000.000</option>
                                                                    <option value="2.000.000 - 3.000.000" <?= $data["penghasilan"] == "2.000.000 - 3.000.000" ? "selected" : "" ?> >2.000.000 - 3.000.000</option>
                                                                    <option value="3.000.000 - 5.000.000" <?= $data["penghasilan"] == "3.000.000 - 5.000.000" ? "selected" : "" ?> >3.000.000 - 5.000.000</option>
                                                                    <option value="5.000.000 - 10.000.000" <?= $data["penghasilan"] == "5.000.000 - 10.000.000" ? "selected" : "" ?> >5.000.000 - 10.000.000</option>
                                                                    <option value="> 10.000.000"> <?= $data["penghasilan"] == "> 10.000.000" ? "selected" : "" ?> > 10.000.000</option>
                                                        <!-- Option dari query penghasilan -->
                                                                </select>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <select name="jk" class="form-control" required="required">
                                                            <option value="">--Pilih Jenis Kelamin--</option>
                                                            <option value="L" <?= $data["jk"] == "L" ? "selected" : "" ?>>Laki-Laki</option>
                                                            <option value="P" <?= $data["jk"] == "P" ? "selected" : "" ?>>Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Beasiswa</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="beasiswa" id="optionsRadios1" value="1" <?= $data["beasiswa"] == 1 ? "checked" : "" ?>>Dapat Beasiswa
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="beasiswa" id="optionsRadios2" value="0" <?= $data["beasiswa"] == 0 ? "checked" : "" ?>>Tidak Dapat Beasiswa
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-lg-6">
                                                <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>

                    <?php
                    require('view/template/footer.php');
                    ?>