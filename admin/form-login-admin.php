<?php
  include ('login-admin.php'); // Memasukkan Skrip login
  if(isset($_SESSION['login_admin'])){
    header("location: index-admin.php");
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../css/styleadmin.css">
    <script type="text/javascript" src="../jquery/jquery.js"></script>
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
        font-family: 'Open Sans';
        background-image: url(../picture/bgadmin.png);
        background-size: 100% 720px;
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
        width: 100px;
        height: 100px;
        margin-left: 90px;
      }
    </style>
    <div class="clogin-admin">
      <img src="../picture/icon.png">
      <form action="" method="post">
        <div class="form-input">
          <input type="text" name="id_admin" id="id_admin" placeholder="ID Admin">
        </div>
        <div class="form-input">
          <input type="password" name="password" id="password" placeholder="password">
        </div>
        <div class="form-input">
          <?php
            if(isset($_POST['submit-admin']) && empty($_SESSION['login_admin'])){
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
          <br/>
        </div>
        <br>
        <input type="submit" name="submit-admin" value="LOGIN"class="sublog"><br/>
      </form>
    </div>
  </body>
</html>
