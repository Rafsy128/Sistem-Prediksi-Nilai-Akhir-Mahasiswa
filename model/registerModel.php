<?php
  
  class registerModel{
    //main function
    public function index(){}
    
    //regis and inser to db
    public function regist(){
      global $con;
        $con->query('
          INSERT INTO user (role,username,email,password)
          VALUES ("2","'.$_POST['username'].'","'.$_POST['email'].'","'.password_hash($_POST['password'], PASSWORD_DEFAULT).'")
        ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Registrasi => silahkan login
                              </div>
                            ";
    }
  }