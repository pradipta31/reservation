<?php
  $servername = "localhost:3306";
  $username = "root";
  $password = "";
  $dbname = "restoran";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if(!$conn){
    die ("Connection Failed" . mysqli_connect_error());
  }
  $sqlTampil = "SELECT * FROM reservation";
  $tampil = $conn->query($sqlTampil);
  $sql = "DELETE FROM reservation WHERE id = ('$_GET[id]')";
  $data = $conn->query($sql);
  
  if(mysqli_query($conn, $sql)){
    echo "Data Berhasil Dihapus!";
      header ('location: index-admin.php?message');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($conn);
  }
  mysqli_close($conn);
?>
