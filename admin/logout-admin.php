<?php
  include('index-admin.php');
  session_start();
  // Menghapus session
  if(session_destroy()){
    header("location: form-login-admin.php"); // Langsung mengarah ke form-login-admin.php
  }
 ?>
