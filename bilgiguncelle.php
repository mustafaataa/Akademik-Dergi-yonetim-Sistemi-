<!DOCTYPE html>
<html>
<head>
	<title>Bilgi Güncelle</title>
</head>
<body>
<?php include("kullanici.php");?>
<div class="container" style="margin-top:90px;">

<div class="login-form">
<div class="main-div">

		<form id="Login"  method="post" action="bilgiguncelle1.php">

				<div class="form-group">
						<input type="text" class="form-control" id="uye_adi" name="uye_adi" placeholder="Kullanıcı Adı" required="required">
				</div>



				<div class="form-group">
						<input type="password" class="form-control" id="uye_sifre" name="uye_sifre" placeholder="Şifre" required="required">
				</div>

				<div class="form-group">
						<input type="email" class="form-control" id="uye_eposta" name="uye_eposta" placeholder="E posta Adresiniz" required="required">
				</div>

				<button type="submit" class="btn btn-primary">Bilgi Guncelle</button><br><br>

		</form>
		</div>
</div></div>
</body>
</html>
