<?php
  include('model/lupa_passwordModel.php'); // panggil model dari lupa_password
  
  class lupa_password extends lupa_passwordModel{
    //main function
    public function index(){
      require('view/auth/lupa_password.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
  }
  $class = new lupa_password();
  if(isset($_POST['submit'])){
    $class->regist();
    header('Location:index.php');
  }
  else{
    $class->index();
  }