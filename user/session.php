<?php
  $connection = mysqli_connect("localhost:3306", "root", "");
  $db = mysql_select_db("restoran", $connection);
  session_start();
  $user_check = $_SESSION['login_user'];
  $ses_sql = mysql_query("SELECT username FROM user WHERE username = '$user_check'", $connection);
  $row = mysql_fetch_assoc($ses_sql); // untuk mengecek apakah user ada atau tidak pada database
  $login_session = $row['username'];
  if(!isset($login_session)){
    mysql_close($connection);
    header('location: form-login.php');
  }
 ?>
