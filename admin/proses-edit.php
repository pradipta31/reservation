<?php
  $connection = mysqli_connect("localhost:3306", "root", "", "restoran");
  $id = $_POST['id'];
  $waktu_datang = $_POST['waktu_datang'];
  $bln = substr($_POST['tanggal'],0,2);
  $tgl = substr($_POST['tanggal'],3,2);
  $thn = substr($_POST['tanggal'],6,10);
  $tanggal = $thn."/".$bln."/".$tgl;
  $jml_org = $_POST['jml_org'];
  $no_telp = $_POST['no_telp'];

  $query = "UPDATE reservation SET waktu_datang='$waktu_datang',
  tanggal='$tanggal',jml_org='$jml_org',no_telp='$no_telp' WHERE id='$id'";

  mysqli_query($connection, $query);
  header("location: index-admin.php?message");
 ?>
