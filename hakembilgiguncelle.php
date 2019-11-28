<!DOCTYPE html>
<html>
<head>
	<title>Bilgi Guncelle</title>
</head>
<body>
<?php include("uzman.php");?>

<div class="container" style="margin-top:90px;">
        <div class="card card-container" style="margin-top: 100px;">

            <form class="form-signin" method="POST" action="hakembilgiguncelle1.php">
            	  <input type="text" id="kullaniciadi" name="kullaniciadi" class="form-control" placeholder="Kullanıcı Adı" required="required">
                <input type="password" id="sifre" name="sifre" class="form-control" placeholder="Şifre" required="required">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required="required">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Güncelle</button><br><br>

            </form><!-- /form -->

        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>
