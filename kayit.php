<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADYS</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

<link href="css/style.css" rel="stylesheet" type="text/css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
  <body id="LoginForm">
  <div class="container" style="margin-top:90px;">

  <div class="login-form">
  <div class="main-div">

     <div class="container" style="padding: 40px;" >

      <div class="card card-container">
          <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->

          <form class="form-signin" method="POST" action="kayit1.php">

              <input type="text" id="kullaniciadi" name="kullaniciadi" class="form-control" placeholder="Kullanıcı Adı" required="required">

              <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Şifre" required="required">
              <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
              <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Kayıt ol</button><br><br>

          </form><!-- /form -->

      </div><!-- /card-container -->
  </div><!-- /container -->


      </div>
  </div></div></div>







<?php include("footer.php");?>
</body>
</html>
