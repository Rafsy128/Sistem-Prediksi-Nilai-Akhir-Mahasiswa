<?php
  session_start();
  if(isset($_SESSION[])){
    require();
  }
  else{
    require('conttroler/auth/index.php');
  }