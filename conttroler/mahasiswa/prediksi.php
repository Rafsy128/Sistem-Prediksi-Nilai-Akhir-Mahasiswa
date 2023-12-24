<?php
  include('model/mahasiswaModel.php'); // panggil model dari user
  
  class users extends mahasiswaModel{
    //main function
    public function index($data){
      global $data1;
      $title="HASIL PREDIKSI NILAI AKHIR";
      $action=4;
      require('view/mahasiswa/prediksi.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  $data=$class->prediksi();
  //echo $_SERVER['REQUEST_URI'];
  $class->index($data);