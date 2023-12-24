<?php

include('model/Mahasiswa.php');
require_once "helper/helper.php";

class editMhs
{
  protected $mahasiswaModel;

  public function __construct($mahasiswaModel)
  {
    $this->mahasiswaModel = $mahasiswaModel;
  }

  public function view()
  {
    $id = $_GET["id"];
    $data = $this->mahasiswaModel->get(["where" => "id_mhs = '$id'"])[0];
    $title = "Edit Mahasiswa";
    $action = 4;
    require_once 'view/dosen/editmhs.php';
  }
}

$mahasiswaModel = new Mahasiswa;
$editMahasiswa = new editMhs($mahasiswaModel);

$editMahasiswa->view();
