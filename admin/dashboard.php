<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/styleadmin.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <b><h2><center>SELAMAT DATANG : <?php echo $_SESSION['login_admin']; ?> </center></h2></b>
    <br>
    <br>
    <body>
      <div class="left-dash">
      <button type ="button" class="btn-edit-dashboard" onclick="window.location='index-admin.php?message'">
        JUMLAH DATA RESERVATION:
        <br>
        <br>
        <font size="7px">
        <?php
          $connection = mysqli_connect("localhost:3306","root","","restoran");
          $query = "SELECT * FROM reservation";
          $hasil = mysqli_query($connection,$query);
          $data = array();
          while ($row = mysqli_fetch_array($hasil)) {
            $data[] = $row;
          }
          $count = count($data);
          echo "$count";
         ?>
       </font>
     </button>

      <button type ="button" class="btn-edit-dashboard" onclick="window.location='index-admin.php?users'">
        JUMLAH DATA USER:
        <br>
        <br>
        <font size="8px">
        <?php
          $connection = mysqli_connect("localhost:3306","root","","restoran");
          $query = "SELECT * FROM user";
          $result = mysqli_query($connection,$query);
          $data = array();
          while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
          }
          $count = count($data);
          echo "$count";
         ?>
       </font>
     </button>
   </div>
  </body>
</html>
