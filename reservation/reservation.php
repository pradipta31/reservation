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
    <title>Restaurant</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../jquery-ui-1.11.4/smoothness/jquery-ui.css">
    <script src="../jquery-ui-1.11.4/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4/jquery-ui.js"></script>
    <script src="../jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../jquery-ui-1.11.4/jquery-ui.theme.css">
    <script>
      $(document).ready(function(){
        $("#tanggal").datepicker({
        })
      })
    </script>
  </head>
  <body>
    <style media="screen">
    body{
      background-image:url(../picture/bg.png);
      background-size: 100% 770px;
      background-repeat: no-repeat;
    }

    .blue{
      height: 60px;
      margin-top: -60px;
      background-color: #2c3e50;;
    }

    #jml_org{
      text-align:left;
      margin-right: 210px;
      margin-bottom: 10px;
    }
    input[type="submit"]{
      width: 90px;
      margin-top: 20px;
      background-color: #2c3e50;
      color: white;
    }
    .resname{
      color: white;
    }

    </style>
    <div id="header">
      <div id="logo">
        <img src="../picture/logo.png"/>
      </div>
      <ul id="navbar">
        <li><a href="../user/profile.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropbtn">Reservation</a>
          <div class="dropdown-content">
            <a href="reservation.php?reservation">Booking Table</a>
            <a href="../user/my-reservation.php?my-reserv">My Reservation</a>
          </div>
        </li>
        <li><a href="../user/about.php">About</a></li>
        <li><a href="../user/logout.php" onclick="return confirm ('Yakin Ingin Logout?')">Logout</a></li>
      </ul>
    </div>
    <div class="cres">
      <form action="reservation_proses.php" method="post">
        <p><b><center class="resname">Username : <?php echo $_SESSION['login_user']; ?></center></b></p>
        <input type="hidden" name="login_user" value="<?php echo $_SESSION['login_user'];?>"/>
        <div class="blue"></div>
        <label>Waktu Kedatangan :</label>
        <select name="waktu_datang" id="waktu_datang">
          <option value="16:00:00">16.00</option>
          <option value="16:30:00">16.30</option>
          <option value="17:00:00">17.00</option>
          <option value="17:30:00">17.30</option>
          <option value="18:00:00">18.00</option>
          <option value="18:30:00">18.30</option>
          <option value="19:00:00">19.00</option>
          <option value="19:30:00">19.30</option>
          <option value="20:00:00">20.00</option>
        </select>
        <br>
        <label>Tanggal Kedatangan :</label>
        <input type="text" name="tanggal" id="tanggal" class="tanggal-reg" />
        <br>
        <label>Jumlah Orang :</label>
        <select name="jml_org" id="jml_org" />
          <option value="1">1 Orang</option>
          <option value="2">2 Orang</option>
          <option value="3">3 Orang</option>
          <option value="4">4 Orang</option>
          <option value="5">5 Orang</option>
          <option value="6">6 Orang</option>
          <option value="7">7 Orang</option>
          <option value="8">8 Orang</option>
        </select>
        <br>
        <label>No Telepon :</label>
        <input type="text" name="no_telp" id="no_telp" />
        <br>
        <br>
        <input type="submit" name="submit" value="Submit"><br/>
      </form>
    </div>
  </body>
</html>
