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
      background-image:url(../picture/bgblue.png);
      background-size: 100% 720px;
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
    </div>
      <img class="logoabout"src="../picture/bgg.png">
      </div>
      <div class="bingkai">
        <p class="about">
        BARES (Bali Restaurant) merupakan web untuk reservation atau
        memboking meja baik itu untuk lunch atau diner.
        tujuan dari BARES sendiri yitu untuk mempermudahkan
        pelanggan dalam reservation atau memboking meja.
        <p><center>
          CP : 085738919220 || Email : bares@gmail.com || Official Line : @bares </center>
      </div>
    </div>
  </form>
  </body>
</html>
