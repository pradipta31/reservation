<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
    include('session.php');
  }
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RESTO BARES</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
  <body>
    <style media="screen">
    body{
      background-image:url(../picture/bg.png);
      background-size: 100% 770px;
      background-repeat: no-repeat;
    }

    </style>
    <form action="" method="post">
    <div id="header">
      <div id="logo">
        <img src="../picture/logo.png"/>
      </div>
      <ul id="navbar">
        <li><a href="profile.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropbtn">Reservation</a>
          <div class="dropdown-content">
            <a href="../reservation/reservation.php?reservation">Booking Table</a>
            <a href="my-reservation.php?my-reserv">My Reservation</a>
          </div>
        </li>
        <li><a href="about.php">About</a></li>
        <li><a href="logout.php" onclick="return confirm ('Yakin Ingin Logout?')">Logout</a></li>
      </ul>

      <?php
        if (isset($_GET['reservation'])) {
          include_once("../reservation/reservation.php");
        }elseif (isset($_GET['my-reserv'])) {
          include_once("my-reservation.php");
        }
       ?>

      <b><i>
        <font color="white">
      <marquee>

       </marquee>
       </font>
      </i></b>

      <div id="kolom">
        <div class="kotak">
          <img src="../picture/mejaaa.png"class="pic">
          <div class="caption">
            <p><h2 class="judul">Meja Untuk 2 Orang</h2></p>
            <img src="../picture/hitam.png" class="gg">
            <br><center>
            Ini merupakan contoh meja makan untuk 2 orang</center>
          </div>
        </div>
        <div class="kotak">
          <img src="../picture/mejabb.png"class="pic">
          <div class="caption">
            <p><h2 class="judul">Meja Untuk 6 Orang</h2></p>
            <img src="../picture/hitam.png" class="gg">
            <br><center>
            Ini merupakan contoh meja makan untuk 6 orang</center>
          </div>
        </div>
        <div class="kotak">
          <img src="../picture/mejacc.png"class="pic">
          <div class="caption">
            <p><h2 class="judul">Meja Untuk 4 Orang</h2></p>
            <img src="../picture/hitam.png" class="gg">
            <br><center>
            Ini merupakan contoh meja makan untuk 4 orang</center>
          </div>
        </div>
        <center>
          <marquee>
      <font color="white"><h3>WELCOME :<?php echo $_SESSION['login_user']; ?></h3></font>
      </center>
      </marquee>
      </div>
    </div>
  </form>
  </body>
</html>
