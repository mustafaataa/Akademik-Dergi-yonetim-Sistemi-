<!DOCTYPE html>
<html>
<head>
	<title>Makale Yükle</title>
	<meta charset="utf-8">
</head>
<body>
<?php include("kullanici.php");?>
<div class="container" style="margin-top:90px;">

<div class="login-form">
<div class="main-div">

		<form id="Login"  method="post" action="makaleekle1.php" enctype="multipart/form-data">

				<div class="form-group">
						<input type="text" class="form-control" id="uye_adi" name="uye_adi" placeholder="Kullanıcı Adı" required="required">
				</div>

				<div class="form-group">
						<input type="text" class="form-control" id="makale_baslik" name="makale_baslik" placeholder="Makale Başlığı" required="required">
				</div><br>
				<div class="form-group">
				<input type="file" class="form-control-file" id="makale_icerik" name="makale_icerik" accept="application/pdf"  required="required">
				</div>
<br>

				<button type="submit" class="btn btn-primary">Makale Ekle</button><br><br>

		</form>
		</div>
</div></div>
</body>
</html>
