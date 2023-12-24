<?php
  
  class loginModel{
    //main function
    public function index(){}
    //Login funtion
    public function login(){
      global $con;
      $check=$con->query('SELECT * FROM user');
      $ketemu=0;

      // echo "<pre>";

      while($c = $check->fetch_assoc()) {
        $username=$c['username'];
        $id=$c['id_user'];

        if($username==$_POST['username'] && password_verify($_POST['password'],$c['password']) ){
          // if($username==$_POST['username']){
          $ketemu = 1;
            $_SESSION['username']=$username;
            $_SESSION['id']=$id;
            $_SESSION['role']=$c['role'];
        }

      }
      // print_r($_SESSION);
      
      if($ketemu==0){
        $_SESSION['message']="
                                <div class='alert alert-danger' role='alert'>
                                  Password Atau Email Mungkin Salah
                                </div>
                              ";
      }
    }
  }