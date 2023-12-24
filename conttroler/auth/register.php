<?php
  include('model/registerModel.php'); // panggil model dari register
  
  class register extends registerModel{
    //main function
    public function index(){
      require('view/auth/register.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
  }
  $class = new register();
  if(isset($_POST['submit'])){
    $class->regist();
    header('Location:index.php');
  }
  else{
    $class->index();
  }