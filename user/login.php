<?php
  session_start();
  $error = '';
  if(isset($_POST['submit'])){
    if(empty($_POST['username']) or empty ($_POST['password'])){
      $error = "Username or Password is invalid";
    }else{
      // Variable username dan password
      $username = $_POST['username'];
      $password = $_POST['password'];
      // Membangun koneksi ke Database
      $connection = mysqli_connect("localhost:3306", "root", "");
      // Mencegah MySQL injection
      /* $username = stripslashes($username);
      $password = stripslashes($password);
      $username = mysql_real_escape_string($username);
      $password = mysql_real_escape_string($password); */
      // Seleksi Database
      $db = mysqli_select_db($connection,"restoran");
      // SQL query untuk memeriksa apakah user terdapat di Database
      $query = mysqli_query($connection,"SELECT * FROM user WHERE password = '$password' AND username = '$username'");
      $userid = mysqli_fetch_assoc($query);
      $rows = mysqli_num_rows($query);
      if($rows == 1){
        $_SESSION['login_user'] = $username; // Membuat session
        $_SESSION['id_user'] = $userid['id_user'];
        header("location: profile.php");
      }else{
        $error = "Username atau Password belum terdaftar";
      }
      mysqli_close($connection); // Menutup koneksi
    }
  }
 ?>
