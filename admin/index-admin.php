<?php
  session_start();
  if (!isset($_SESSION['login_admin'])){
  include('session-admin.php');
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Bares</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/styleadmin.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div id="header">
      <div class="logo">
        <a href="index-admin.php">
          <img src="../picture/logo.png">
        </a>
      </div>
    </div>
    <div id="container">
      <div class="sidebar">
        <ul id="nav">
          <li><a href="index-admin.php?dashboard">Dashboard</a></li>
          <li><a href="index-admin.php?users">Data Users</a></li>
          <li><a href="index-admin.php?message">Data Reservation</a></li>
          <li><a href="logout-admin.php" onclick="return confirm ('Yakin Ingin Logout?')">Logout dari : <?php echo $_SESSION['login_admin']; ?></a></li>
        </ul>
      </div>
      <div class="content">
        <?php
          if(isset($_GET['message'])){
            include_once("message.php");
          }else if(isset($_GET['dashboard'])){
            include_once("dashboard.php");
          }else if(isset($_GET['users'])){
            include_once("users.php");
          }
        ?>
      </div>
    </div>
  </body>
</html>
