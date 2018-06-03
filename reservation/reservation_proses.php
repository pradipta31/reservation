<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reservation Sukses</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    <style media="screen">
    body{
      background-image:url(../picture/bg.png);
      background-size: 100% 770px;
      background-repeat: no-repeat;
      font-family: sans-serif;
      color: black;
    }
    .line{
      width: 700px;
      height: 50px;
      text-align: center;
      background-color: #2c3e50;
      margin-top: -216px;
      color: white;
    }
    .linee{
      width: 700px;
      height: 2px;
      background-color: #2c3e50;
      margin-top: 100px;
    }
    input[type="submit"]{
      width: 70px;
      margin-top: 100px;
      background-color: #2c3e50;
      color: white;
    }
    .cresa{
      width: 700px;
      height: 320px;
      text-align: center;
      background-color: white;
      margin: 0 auto;
      border-radius: 4px;
      margin-top: 90px;
    }
    </style>
    <div class="cresa">
    <?php
    $connection = mysqli_connect("localhost:3306", "root", "", "restoran");
    $login_usera = $_POST['login_user'];
    $waktu_datang = $_POST['waktu_datang'];
    $bln = substr($_POST['tanggal'],0,2);
    $tgl = substr($_POST['tanggal'],3,2);
    $thn = substr($_POST['tanggal'],6,10);
    $tanggal = $thn."/".$bln."/".$tgl;
    $jml_org = $_POST['jml_org'];
    $no_telp = $_POST['no_telp'];

    if($connection){
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Username : ".$login_usera;
      echo "<br>";
      echo "Waktu Kedatangan : $waktu_datang";
      echo "<br>";
      echo "Tanggal Kedatangan : $tanggal";
      echo "<br>";
      echo "Jumlah Orang : $jml_org";
      echo "<br>";
      echo "No Telepon : $no_telp";
      echo "<br>";

      $query ="INSERT INTO reservation (id_user,waktu_datang, tanggal, jml_org, no_telp)
      VALUES ('".$_SESSION['id_user']."','$waktu_datang', '$tanggal', '$jml_org', '$no_telp')";

      $hasil = mysqli_query($connection,$query);
      echo "<br>";
      echo "<br>";
      echo "Proses Booking Berhasil Silahkan Datang Sesuai Waktu Yang Ditentukan";
      echo "<br>";
      echo "Dan Apabila Lebih 30 Menit Dari Waktu Yang Telah Di Reserv Maka Reserv Akan Dibatalkan";
      mysqli_close($connection);
    }else{
      echo "Server Not Connected";
    }
     ?>
     <div class="line"><br>SUKSES!</div>
     <div class="linee"></div>
     <a href="../user/profile.php"><input type="submit" name="submit" value="OK" class="subres"></a><br/>
     </div>
    </div>
  </body>
</html>
