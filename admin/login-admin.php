<?php
  session_start(); // Memulai session
  $error = ''; // Variable untuk Menyimpan Error
  if(isset($_POST['submit-admin'])){
    if(empty($_POST['id_admin']) or empty($_POST['password'])){
      //$error = "Username or Password is invalid";
    }else{
      // Variable username dan password
      $id_admin = $_POST['id_admin'];
      $password = $_POST['password'];
      // Membangun koneksi Ke database
      $connection = mysqli_connect("localhost:3306", "root", "");
      // Mencegah MySQL injection
      $id_admin = stripcslashes($id_admin);
      $password = stripslashes($password);
      $id_admin = mysqli_real_escape_string($connection,$id_admin);
      $password = mysqli_real_escape_string($connection,$password);
      // Seleksi Database
      $db = mysqli_select_db ($connection,"restoran");
      // SQL query untuk memeriksa apakah user tersebut terdapat di Database
      $query = mysqli_query($connection,"SELECT * FROM admin WHERE password = '$password' AND id_admin = '$id_admin'");
      $rows = mysqli_num_rows($query);
      if($rows == 1){
        $_SESSION['login_admin'] = $id_admin; // Membuat Session
        header("location: index-admin.php?dashboard");
      }else{
        $error = "Id Admin atau Password belum terdaftar";
      }
      mysqli_close($connection); // Menutup Koneksi
    }
  }
 ?>
