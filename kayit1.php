<!--Kayıt Ekleme -->
<?php
session_start();
include("baglanti.php");


$uye_adi=$_POST['kullaniciadi'];
$uye_sifre=$_POST['sifre'];
$uye_eposta=$_POST['email'];


$ekle= "INSERT INTO uyeler (uye_adi, uye_sifre,uye_eposta,uye_rutbe)
VALUES ('$uye_adi','$uye_sifre','$uye_eposta','3')";
$sonuc=mysqli_query($baglanti,$ekle);
if ($ekle){
    echo "Başarıyla eklendi";
     header("location: index.php");

}
else{
        echo "Eklenemedi, kontrol ediniz";
}
 ?>

 <!--Kayıt Ekleme -->
