<?php
  $connection = mysqli_connect("localhost:3306","root","","restoran");
  $id = $_POST['id_user'];
  $id_user = $_POST['id_user'];
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

  $query = "UPDATE user SET username='$username', tanggal='$tanggal',nama = '$nama',
  email = '$email',alamat='$alamat',no_telp='$no_telp' WHERE id_user = '$id'";

  mysqli_query($connection,$query);
  header ("location: index-admin.php?users");
 ?>
