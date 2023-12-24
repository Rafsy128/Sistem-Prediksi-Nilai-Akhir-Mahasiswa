<?php
  include('model/loginModel.php'); // panggil model dari login
  
  class login extends loginModel{
    //main function
    public function index(){
      require('view/auth/login.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }

  $class = new login();

  if(isset($_POST['submit'])){
    
    $class->login();
    header('Location:index.php?login');

  }

  else{

    $class->index();
    
  }