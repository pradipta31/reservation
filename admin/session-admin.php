<?php
  $connection = mysqli_connect("localhost:3306", "root", "");
  $db = mysql_select_db("restoran", $connection);
  session_start();
  $user_check = $_SESSION['login_admin'];
  $ses_sql = mysql_query("SELECT id_admin FROM admin WHERE id_admin = '$user_check'", $connection);
  $row = mysql_fetch_assoc($ses_sql);
  $login_session = $row['id_admin'];
  if(!isset($login_session)){
    mysql_close($connection);
    header('location: form-login-admin.php');
  }
 ?>
