<!--Makale Yukle -->

<?php
session_start();
include("baglanti.php");


$uye_adi=$_POST['uye_adi'];
$makale_baslik=$_POST['makale_baslik'];
$makale_icerik=$_POST['makale_icerik'];

$hedef = "makale/";
$hedef = $hedef . basename( $_FILES['makale_icerik']['name']) ;
$dosyaadi = $_FILES['makale_icerik']['name'] ;
// İzin verilen dosya türleri
if($_FILES["makale_icerik"]["type"] =="application/pdf" ){
echo "Yalnızca pdf yükleyebilirsiniz";


if(move_uploaded_file($_FILES['makale_icerik']['tmp_name'], $hedef)){
    $ekle = "INSERT INTO makaleler (uye_adi,makale_baslik,makale_adi,makale_icerik,makale_durum,makale_aciklama)
                            VALUES('$uye_adi','$makale_baslik','$dosyaadi','$hedef',1,'Denetleniyor...')";
            $result=mysqli_query($baglanti,$ekle);
        if ($ekle){
    echo "Başarıyla eklendi";
    header("location: kullanici.php");
}else{
        echo "Eklenemedi, kontrol ediniz";
}
  }   }

?>
 <!--Makale Yukle -->
