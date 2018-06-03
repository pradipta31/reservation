<?php
  $connection = mysqli_connect("localhost:3306","root","","restoran");

  $id = $_GET['id_user'];
  $query = mysqli_query($connection, "SELECT * FROM user WHERE id_user='$id'");
  $row = mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Edit Data Users</title>
    <link rel="stylesheet" type="text/css" href="../css/styleadmin.css">
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
    background-image: url(../picture/bgadmin.png);
    background-repeat: no-repeat;
    background-size: 100% 770px;
  }
  </style>
    <div class="cres">
      <form class="edit-data" action="proses-edit-users.php" method="post">
        <input type="hidden" name="id_user" value="<?php echo $row['id_user'];?>">
        <div class="blue">
          <br><font color= "white">
            <h3>EDIT DATA USERS</h3>
          </font>
        </div>
        <br>
        <label>Username</label>
        <input type="text" class="edit-username" name="username" value="<?php echo $row['username'];?>">
        <br>
        <label>Nama</label>
        <input type="text" class="edit-nama" name="nama" value="<?php echo $row['nama'];?>">
        <br>
        <label>Email Address</label>
        <input type="text" class="edit-email" name="email" value="<?php echo $row['email'];?>">
        <br>
        <label>Tanggal Lahir</label>
        <input type="text" class="edit-tanggal" name="tanggal" id="tanggal" class="tanggal-reg" value="<?php echo $row['tanggal']; ?>">
        <br>
        <label>Alamat</label>
        <input type="text" class="edit-alamat" name="alamat" value="<?php echo $row['alamat'];?>">
        <br>
        <label>No Telepon</label>
        <input type="text" class="edit-notelp" name="no_telp" value="<?php echo $row['no_telp'];?>">
        <br>
        <br>
        <input type="submit" value="Simpan Perubahan" class="btn-edit" onclick="return confirm ('Yakin simpan perubahan ?')">
        <button type="button" class="btn-edit-cancel" onclick="window.location='index-admin.php?users'">
        <center><font size="3px">Cancel</font></center></button>
      </form>
    </div>
  </body>
</html>
