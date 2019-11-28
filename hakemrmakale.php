<!DOCTYPE html>
<html>
<head>
   <title>Makaleler</title>
</head>
<body>
<?php include("uzman.php");?>


<center><h3 style="color: #fff;" >ONAYLANAN MAKALE LİSTESİ</h3></center><div class="a" style=" padding-top: 10px;color: #fff;">
   <div class="a" style="margin-left: 300px;">
<?php
session_start();
include("baglanti.php");


$a="SELECT * FROM makaleler WHERE  makale_durum=4 ";
$b=mysqli_query($baglanti,$a);


$bes="SELECT * FROM makaleler WHERE  makale_durum!=4 ";
$besdegil=mysqli_query($baglanti,$bes);

$birlestir="SELECT * FROM makaledurum  INNER JOIN makaleler  ON  makaledurum.makale_durum= makaleler.makale_durum ";
$d=mysqli_query($baglanti,$birlestir);

echo "<table  border='1' cellspacing='0' width='800px'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Gönderen Kullanıcı</th>";
echo "<th>Konu</th>";
echo "<th>Dosya Açıklaması</th>";
echo "<th>Dosya Adı</th>";
echo "</tr>";
while ($yaz1=mysqli_fetch_array($b,MYSQLI_ASSOC)  ) {
   echo "<tr>";
   echo "<td>$yaz1[makale_id]</td>";
   echo "<td>$yaz1[uye_adi]</td>";
   echo "<td>$yaz1[makale_baslik]</td>";
   echo "<td>$yaz1[makale_aciklama]</td>";
   echo "<td><a href=https://localhost/ibrahim/$yaz1[makale_icerik]>$yaz1[makale_adi]</a></td>";
   echo "</tr>";
   }

echo "<table  border='1' cellspacing='0' width='800px'>";
echo "<br>";echo "<br>";echo "<br>";
echo "<captain>ONAY BEKLEYEN VEYA ONAYLANMAMIŞ MAKALELER: </captain>";
echo "<br>";echo "<br>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Gönderen Kullanıcı</th>";
echo "<th>Konu</th>";
echo "<th>Dosya Açıklaması</th>";
echo "<th>Dosya Adı</th>";
echo "<th>Durumu</th>";
echo "</tr>";
while ($yaz3=mysqli_fetch_array($besdegil,MYSQLI_ASSOC) and $yaz2=mysqli_fetch_array($d,MYSQLI_ASSOC)) {
   echo "<tr>";
   echo "<td>$yaz3[makale_id]</td>";
   echo "<td>$yaz3[uye_adi]</td>";
   echo "<td>$yaz3[makale_baslik]</td>";
   echo "<td>$yaz3[makale_aciklama]</td>";
echo "<td><a href=https://localhost/ibrahim/$yaz3[makale_icerik]>$yaz3[makale_adi]</a></td>";
   echo "<td>$yaz2[makaledurum_adi]</a></td>";
   echo "</tr>";
   }




?>


</div>


</body>
</html>
