<?php
  require_once "model/Mahasiswa.php";
  
  class MahasiswaToExcel {

    protected $mahasiswaModel;

    public function __construct($mahasiswaModel)
    {
      $this->mahasiswaModel = $mahasiswaModel;
    }

    public function export()
    {
      header("Content-Type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=Data Mahasiswa.xls");
      header("Cache-Control: no-cache; must-revalidate");
      header("Pragma: no-cache");
      
      $data = $this->mahasiswaModel->get(["orderby" => "id_mhs DESC"]);
      require_once 'view/dosen/excelmhs.php';
    }
   
  }

  $mahasiswaModel = new Mahasiswa;
  $excel = new MahasiswaToExcel($mahasiswaModel);
  $excel->export();
