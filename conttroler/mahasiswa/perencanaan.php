<?php
  include('model/mahasiswaModel.php'); // panggil model dari user
  
  class users extends mahasiswaModel{
    //main function
    public function index($data){
      global $data1;
      $title="BUAT PERENCANAAN STUDI";
      $action=4;
      require('view/mahasiswa/perencanaan.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  $data=$class->perencanaan();
  //echo $_SERVER['REQUEST_URI'];
  $class->index($data);