<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRASI USER</title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
  </head>
  <body>
    <style media="screen">
      .creq{
        margin-top:150px;
        height: 310px;
      }
      body{
        background-image:url(../picture/bg.png);
        background-size: 100% 770px;
        background-repeat: no-repeat;
        color: white;
        font-size: 17px;
      }
    </style>
    <div class="creq">
      <form action="" method="post">
        <?php
        $connection = mysql_connect("localhost:3306", "root", "");
        $username = $_POST['username'];
        $bln = substr($_POST['tanggal'], 0,2);
        $tgl = substr($_POST['tanggal'], 3,2);
        $thn = substr($_POST['tanggal'], 6,10);
        $tanggal = $thn."/".$bln."/".$tgl;
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        if($connection){
          mysql_select_db("restoran");
          echo "<br>";
          echo "<br>";
          echo "Nama : $nama";
          echo "<br>";
          echo "Username : $username";
          echo "<br>";
          echo "Email : $email";
          echo "<br>";
          $query = "INSERT INTO user (username, nama, email, password, tanggal,alamat, no_telp)
          VALUES ('$username', '$nama', '$email', '$password','$tanggal','$alamat', '$no_telp')";

          $hasil = mysql_query($query, $connection);
          echo "<br>";
          echo "REGISTRASI USER BERHASIL DILAKUKAN";
          mysql_close($connection);
        }else{
          echo "Server not Connected";
        }
        ?>
        <br>
        <br>
        <a href="form-login.php"><font color="blue">Klik disini Untuk login</font></a>
        </div>
      </form>
    </div>
  </body>
</html>
