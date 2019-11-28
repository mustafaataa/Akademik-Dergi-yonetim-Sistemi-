<!--Güncelleme -->
 <?php

include("baglanti.php");

$id = $_POST["id"];
$durumid = $_POST["durumid"];
$durumaciklama = $_POST["durumaciklama"];

  if ($durumid>1  and $durumid<6){
$update = "UPDATE makaleler SET makale_durum = '$durumid' ,makale_aciklama = '$durumaciklama' WHERE makale_id= '$id'";
$sonuc=mysqli_query($baglanti,$update);

if ($update){


echo "Güncelleme İşlemi Başarılı Bir Şekilde Gerçekleştirildi";
 header("location: hakemmakaleonayla.php");
}}
else
{
header("location: uzman.php");

}
?>
<!--Güncelleme -->
