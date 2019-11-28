<!--Giriş Kontrol -->
<?php
session_start();
include("baglanti.php");

$uye_adi=$_POST['uye_adi'];
$uye_sifre=$_POST['uye_sifre'];



$sql="SELECT * FROM uyeler WHERE uye_adi='$uye_adi' and uye_sifre='$uye_sifre'";
$result=mysqli_query($baglanti,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1){
   if ($row["uye_rutbe"]==1) {
    header("location: admin.php");
}
    else  if ($row["uye_rutbe"]==2) {
    header("location: uzman.php");
}
    else  if ($row["uye_rutbe"]==3) {
    header("location: kullanici.php");
}    }
else{
    header("location: index.php");
}
?>
<!--Giriş Kontrol -->
