<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
    include('session.php');
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>My Reservation</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
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
    </div>
      <div class="res-edit">
        <br>
        <b><center><h3>MY RESERVATION</h3></center></b>
        <br>
        <div class = "table-edit">
        <table class="table table-bordered">

        <tr>
          <th><center>Username</center></th>
          <th><center>Waktu Datang</center></th>
          <th><center>Tanggal</center></th>
          <th><center>Jumlah Orang</center></th>
          <th><center>Telpon</center></th>
        </tr>

        <?php
          $conn = mysqli_connect("localhost:3306","root","","restoran");
          $query = mysqli_query($conn,"SELECT reservation.*, user.username FROM reservation
          INNER JOIN user ON user.id_user = reservation.id_user WHERE reservation.id_user = '".$_SESSION['id_user']."'");

          while($row = mysqli_fetch_assoc($query)){
          ?>

          <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['waktu_datang']; ?></td>
            <td><?php echo $row['tanggal']; ?></td>
            <td><?php echo $row['jml_org']; ?></td>
            <td><?php echo $row['no_telp']; ?></td>
          </tr>
        <?php
          }
         ?>
        </table>
      </div>
    </div>
    </form>
  </body>
</html>
