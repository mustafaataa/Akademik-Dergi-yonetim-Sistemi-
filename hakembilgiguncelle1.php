<!--Güncelleme -->
 <?php
session_start();
include("baglanti.php");


$sifre = $_POST["sifre"];
$email = $_POST["email"];
$kullaniciadi = $_POST["kullaniciadi"];

$update = "UPDATE uyeler SET uye_sifre = '$sifre',uye_eposta = '$email' WHERE uye_adi = '$kullaniciadi'";
$sonuc=mysqli_query($baglanti,$update);

if ($update)
{
echo "Güncelleme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
 header("location: uzman.php");
}
else
{
echo "Hata";

}
?>
<!--Güncelleme -->
