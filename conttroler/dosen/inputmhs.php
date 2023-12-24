<?php
include('model/Mahasiswa.php');
require_once "helper/helper.php";


class InputMhs
{
  protected $mahasiswaModel;

  public function __construct($mahasiswaModel)
  {
    $this->mahasiswaModel = $mahasiswaModel;
  }

  public function doSave()
  {
    $newMsh = validate(["nim", "nama", "semester", "ips", "ipk", "penghasilan", "mk_mengulang", "mk_terlambat", "jk", "beasiswa"]);
    if ($newMsh) {
      $this->mahasiswaModel->save($newMsh);
      setSuccess("Data Mahasiswa Berhasil Ditambah!");
      header("location: ?datamhs");
    } else {
      setError("Lengkapi Form!");
      header("location: ?inputdata");
    }
  }
}

$mahasiswaModel = new Mahasiswa;
$inputMsh = new InputMhs($mahasiswaModel);
$inputMsh->doSave();
