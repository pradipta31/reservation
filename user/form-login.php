<?php
  include ('login.php'); // Memasukkan Skrip login
  if(isset($_SESSION['login_user'])){
    header("location: profile.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login User</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../jquery/jquery.js"></script>
    <!-- fungsi untuk menampilkan username atau password salah-->
    <script type="text/javascript">
      $(document).ready(function(){
        $("#butt").on("click",function(){
          $("#pesan-gagal").fadeOut(200);
          location.reload();
        });
      });
    </script>
  </head>
  <body>
    <style media="screen">
    body{
      background-image:url(../picture/bg.png);
      background-size: 100% 770px;
      background-repeat: no-repeat;
    }

    #pesan-gagal{
      position: fixed;
      top:0px;
      left:0px;
      right: 0px;
      bottom: 0px;
      z-index: 999999999;
      background: rgba(0,0,0,.7);
      color: #fff;
    }
    #pesannya{
      width:300px;
      height: 100px;
      background: #fff;
      border-radius: 2px;
      color: #333;
      box-sizing: border-box;
      padding: 20px;
      font-size: 20px;
      margin:200px auto;
    }
    .clogin{
      height: 310px;
    }
    input[type="submit"]{
      margin-top: -20px;
      width: 90px;
      text-align: left;
      background-color: white;
      color: #2c3e50;
    }
    </style>
    <div class="clogin">
      <img src="../picture/icon.png">
      <form action="" method="post">
        <div class="form-input">
          <input type="text" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-input">
          <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <div class="form-input">
          <?php
            if(isset($_POST['submit']) && empty($_SESSION['login_user'])){
              echo "
                  <div id='pesan-gagal'>
                        <div id='pesannya'>
                            Username atau Password salah!
                            <button id='butt'>OK</button>
                        </div>
                  </div>
              ";
            }else{}
          ?>
          <br/><br/>
        </div>
          <input type="submit" name="submit" value="LOGIN"><br/>
        <a href="registrasi.php">Register</a>
      </form>
    </div>
  </body>
</html>
