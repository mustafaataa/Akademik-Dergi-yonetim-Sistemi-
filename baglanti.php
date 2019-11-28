<?php
$hostadresi = "localhost";
$kullaniciadi = "root";
$sifre = "";
$veritabani = "dergi";
$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "Başarısız" . mysqli_connect_error();
}
?>
