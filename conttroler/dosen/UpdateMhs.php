<?php
include('model/Mahasiswa.php');
require_once "helper/helper.php";


class UpdateMhs
{
  protected $mahasiswaModel;

  public function __construct($mahasiswaModel)
  {
    $this->mahasiswaModel = $mahasiswaModel;
  }

  public function do()
  {
    $newMsh = validate(["nim", "nama", "semester", "ips", "ipk", "penghasilan", "mk_mengulang", "mk_terlambat", "jk", "beasiswa"]);
    if ($newMsh) {

      $id = $_GET["id"];
      $this->mahasiswaModel->update($newMsh, $id);
      setSuccess("Data Mahasiswa Berhasil Diupdate!");
      header("location: ?datamhs");
    } else {
      setError("Lengkapi Form!");
      header("location: ?inputdata");
    }
  }
}

$mahasiswaModel = new Mahasiswa;
$update = new UpdateMhs($mahasiswaModel);
$update->do();
