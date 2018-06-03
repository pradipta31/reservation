<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <b><center><h3>DATA USERS</h3></center></b>
    <br>
    <table class="table table-bordered">
    <tr>
      <th>ID User</th>
      <th>Username</th>
      <th>Full Name</th>
      <th>Email Address</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      <th>No Telepon</th>
      <th>Opsi</th>
    </tr>

    <?php
      $conn = mysqli_connect("localhost:3306","root","","restoran");
      $query = mysqli_query($conn,"SELECT * FROM user");

      while($row = mysqli_fetch_assoc($query)){
        // $query2 = mysqli_fetch_assoc(mysqli_query($conn,"select * from user where id_user='".$row['id_user']."'"));
      ?>

      <tr>
        <td><?php echo $row['id_user']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['tanggal']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['no_telp']; ?></td>
        <td><a href="hapus-data-users.php?id_user=<?php echo "$row[id_user]"; ?>"
          onclick="return confirm ('Yakin Ingin Hapus Data Ini ?')"><font color="blue">Hapus</font></a> |
          <a href="form-edit-data-users.php?id_user=<?php echo "$row[id_user]"; ?>"><font color = "blue">Edit</font></a>
        </td>
      </tr>


    <?php
      }
     ?>

    </table>
  </body>
  </html>
