<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <b><center><h3>TABLE RESERVATION USER</h3></center></b>
    <br>
    <table class="table table-bordered">
    <tr>
      <th>Username</th>
      <th>Waktu Datang</th>
      <th>Tanggal</th>
      <th>Jumlah Orang</th>
      <th>Telpon</th>
      <th>Opsi</th>
    </tr>

    <?php
      $conn = mysqli_connect("localhost:3306","root","","restoran");
      $query = mysqli_query($conn,"select * from reservation");

      while($row = mysqli_fetch_assoc($query)){
        $query2 = mysqli_fetch_assoc(mysqli_query($conn,"select * from user where id_user='".$row['id_user']."'"));
      ?>

      <tr>
        <td><?php echo $query2['username']; ?></td>
        <td><?php echo $row['waktu_datang']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['jml_org']; ?></td>
        <td><?php echo $row['no_telp']; ?></td>
        <td><a href="hapus-data-reservation.php?id=<?php echo "$row[id]"; ?>"
          onclick="return confirm ('Yakin Ingin Hapus Data Ini ?')"><font color="blue">Hapus</font></a> |
          <a href="form-edit-data-reservation.php?id=<?php echo "$row[id]"; ?>"><font color = "blue">Edit</font></a>
        </td>
      </tr>


    <?php
      }
     ?>

    </table>
  </body>
  </html>
