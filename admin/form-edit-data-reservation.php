<?php
  $connection = mysqli_connect("localhost:3306","root","","restoran");

  $id = $_GET['id'];
  $query = mysqli_query($connection, "SELECT * FROM reservation WHERE id='$id'");
  $row = mysqli_fetch_array($query);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Form Edit Data Reservation</title>
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
    <div class="cres-resv">
     <form action="proses-edit.php" method="post" class="edit-data">
       <input type="hidden" name="id" value="<?php echo $row['id'];?>">
       <div class="blue"><br><font color="white"><h3>EDIT DATA RESERVATION</h3></font></div>
       <label>Waktu Kedatangan :</label>
       <select name="waktu_datang" id="waktu_datang" value="<?php echo $row['waktu_datang'];?>">
         <option value="16:00:00" <?= ($row['waktu_datang'] == "16:00:00") ? 'selected' : '' ; ?>>16.00</option>
         <option value="16:30:00" <?= ($row['waktu_datang'] == "16:30:00") ? 'selected' : '' ; ?>>16.30</option>
         <option value="17:00:00" <?= ($row['waktu_datang'] == "17:00:00") ? 'selected' : '' ; ?>>17.00</option>
         <option value="17:30:00" <?= ($row['waktu_datang'] == "17:30:00") ? 'selected' : '' ; ?>>17.30</option>
         <option value="18:00:00" <?= ($row['waktu_datang'] == "18:00:00") ? 'selected' : '' ; ?>>18.00</option>
         <option value="18:30:00" <?= ($row['waktu_datang'] == "18:30:00") ? 'selected' : '' ; ?>>18.30</option>
         <option value="19:00:00" <?= ($row['waktu_datang'] == "19:00:00") ? 'selected' : '' ; ?>>19.00</option>
         <option value="19:30:00" <?= ($row['waktu_datang'] == "19:30:00") ? 'selected' : '' ; ?>>19.30</option>
         <option value="20:00:00" <?= ($row['waktu_datang'] == "20:00:00") ? 'selected' : '' ; ?>>20.00</option>
       </select>
       <br>
       <label>Tanggal Kedatangan :</label>
       <input type="text" name="tanggal" id="tanggal" class="tanggal-reg" value="<?php echo $row['tanggal']; ?>">
       <br>
       <label>Jumlah Orang :</label>
       <select name="jml_org" id="jml_org" value="<?php echo $row['jml_org']; ?>" >
         <option value="1" <?= ($row['jml_org'] == 1) ? 'selected' : '' ; ?>>1 Orang</option>
         <option value="2" <?= ($row['jml_org'] == 2) ? 'selected' : '' ; ?>>2 Orang</option>
         <option value="3" <?= ($row['jml_org'] == 3) ? 'selected' : '' ; ?>>3 Orang</option>
         <option value="4" <?= ($row['jml_org'] == 4) ? 'selected' : '' ; ?>>4 Orang</option>
         <option value="5" <?= ($row['jml_org'] == 5) ? 'selected' : '' ; ?>>5 Orang</option>
         <option value="6" <?= ($row['jml_org'] == 6) ? 'selected' : '' ; ?>>6 Orang</option>
         <option value="7" <?= ($row['jml_org'] == 7) ? 'selected' : '' ; ?>>7 Orang</option>
         <option value="8" <?= ($row['jml_org'] == 8) ? 'selected' : '' ; ?>>8 Orang</option>
       </select>
       <br>
       <label>No Telepon :</label>
       <input type="text" name="no_telp" id="no_telp" value="<?php echo $row['no_telp'] ?>">
       <br>
       <br>
       <input type="submit" value="Simpan Perubahan" class="btn-edit" onclick="return confirm ('Yakin Data sudah benar diinputkan?')">
       <button type="button" class="btn-edit-cancel" onclick="window.location='index-admin.php?message'">
        <center><font size="3px">Cancel</font></center></button>
     </form>
     </div>
   </body>
 </html>
