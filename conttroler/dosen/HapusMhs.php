<?php
include('model/Mahasiswa.php');
require_once "helper/helper.php";


class HapusMhs
{
  protected $mahasiswaModel;

  public function __construct($mahasiswaModel)
  {
    $this->mahasiswaModel = $mahasiswaModel;
  }

  public function do()
  {
    $id = $_GET["id"];
    $this->mahasiswaModel->delete($id);
    setSuccess("Data Mahasiswa Berhasil Dihapus!");
    header("location: ?datamhs");
  }
}

$mahasiswaModel = new Mahasiswa;
$hapus = new HapusMhs($mahasiswaModel);
$hapus->do();
