<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../jquery-ui-1.11.4/smoothness/jquery-ui.css">
    <script src="../jquery-ui-1.11.4/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4/jquery-ui.js"></script>
    <script src="../jquery-ui-1.11.4/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../jquery-ui-1.11.4/jquery-ui.theme.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
      background-image:url(../picture/bg.png);
      background-size: 100% 770px;
      background-repeat: no-repeat;
    }
    .creq{
      width: 400px;
      height: 581px;
      text-align: center;
      background-color: rgba(52,73,94,0.7);
      margin: 0 auto;
      border-radius: 4px;
      margin-top: 150px;
    }
    .creq{
      margin-top: 90px;
      height: 600px;
    }
    .subregg{
      width: 100px;
      height: 35px;
      text-align: center;
    }
    </style>
    <div class="creq">
      <img src="../picture/icon.png">
      <form action="proses_registrasi.php" method="post">
        <div class="form-reg">
          <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-reg">
          <input type="text" name="nama" placeholder="Full Name">
        </div>
        <div class="form-reg">
          <input type="text" name="email" id ="email" placeholder="Email Address">
        </div>
        <div class="form-reg">
          <input type="text" name="tanggal" id="tanggal" placeholder="Tanggal Lahir"/>
        </div>
        <div class="form-reg">
          <input type="password" name="password" id = "password" placeholder="Password">
          <input type="password" name="repassword" id = "repassword" placeholder="Re-Type Password">
        </div>
        <div class="form-reg">
          <input type="text" name="alamat" id="alamat" placeholder="Alamat">
        </div>
        <div class="form-reg">
          <input type="text" name="no_telp" id="no_telp-reg" placeholder="No Telphone">
        </div>
        <input type="submit" name="submit" value="REGISTER">
        <a href="form-login.php"><button type="button" name="button" class="subregg">CANCEL </button></a>
      </form>

    </div>

  </body>
</html>
