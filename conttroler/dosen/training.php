<?php
  include('model/dosenModel.php'); // panggil model dari user
  
  class users extends dosenModel{
    //main function
    public function index($data){
      global $data1;
      $title="TRAINING DATA";
      $action=4;
      require('view/dosen/training.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  $data=$class->training();
  //echo $_SERVER['REQUEST_URI'];
  $class->index($data);