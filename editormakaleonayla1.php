<!--Güncelleme -->
 <?php

include("baglanti.php");

$durumid = $_POST["durumid"];
$id = $_POST["id"];
$durumaciklama = $_POST["durumaciklama"];
	if ($durumid>0  and $durumid<4){
$update = "UPDATE makaleler SET makale_durum = '$durumid' ,makale_aciklama = '$durumaciklama' WHERE makale_id= '$id'";
$sonuc=mysqli_query($baglanti,$update);

if ($update){


echo "Güncelleme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
 header("location: makaleonayla.php");
}}
else
{
header("location: admin.php");}
?>
<!--Güncelleme -->
