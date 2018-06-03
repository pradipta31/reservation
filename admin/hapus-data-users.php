<?php
  $conn = mysqli_connect("localhost:3306","root","","restoran");
  if(!$conn){
    die ("Connection Failed" . mysqli_connect_error());
  }
  $sqlTampil = "SELECT * FROM user";
  $tampil = $conn->query($sqlTampil);
  $sql = "DELETE FROM user WHERE id_user = ('$_GET[id_user]')";
  $data = $conn->query($sql);

  if(mysqli_query($conn, $sql)){
    echo "Data Berhasil Dihapus!";
      header ('location: index-admin.php?users');
  }else{
    echo "Data Gagal Dihapus!".mysqli_error($conn);
  }
  mysqli_close($conn);
?>
