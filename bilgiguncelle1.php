<!--Güncelleme -->
 <?php
session_start();
include("baglanti.php");


$uye_adi=$_POST['uye_adi'];
$uye_sifre=$_POST['uye_sifre'];
$uye_eposta=$_POST['uye_eposta'];


$update = "UPDATE uyeler SET uye_sifre = '$uye_sifre',uye_eposta = '$uye_eposta' WHERE uye_adi= '$uye_adi'";
$sonuc=mysqli_query($baglanti,$update);

if ($update)
{
echo "Güncelleme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
 header("location: kullanici.php");
}
else
{
echo "Hata";

}
?>
<!--Güncelleme -->
