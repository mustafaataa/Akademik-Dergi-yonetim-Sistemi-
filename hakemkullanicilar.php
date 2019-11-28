<!DOCTYPE html>
<html>
<head>
   <title>Makaleler</title>
</head>
<body>
<?php include("uzman.php");?>


<center><h5 style="color: blue;" >YAZAR KULLANICI  LİSTESİ</h5></center><div class="a" style=" padding-top: 10px;color: #fff;">
   <div class="a" style="margin-left: 300px;">
<?php
session_start();
include("baglanti.php");


$a="SELECT * FROM uyeler WHERE  uye_rutbe=3";
$b=mysqli_query($baglanti,$a);

$c="SELECT * FROM uyeler WHERE  uye_rutbe=1";
$d=mysqli_query($baglanti,$c);



echo "<table  border='1' cellspacing='0' width='800px'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Kullanıcı Adı</th>";
echo "<th>Uye tarihi</th>";
echo "<th>Mail Adres</th>";
echo "</tr>";
while ($yaz1=mysqli_fetch_array($b,MYSQLI_ASSOC)  ) {
   echo "<tr>";
   echo "<td>$yaz1[uye_id]</td>";
   echo "<td>$yaz1[uye_adi]</td>";
   echo "<td>$yaz1[uye_tarih]</td>";
   echo "<td>$yaz1[uye_eposta]</td>";
   echo "</tr>";
   }

echo "<table  border='1' cellspacing='0' width='800px'>";
echo "<br>";echo "<br>";echo "<br>";
echo "<captain>EDİTÖR LİSTESİ: </captain>";
echo "<br>";echo "<br>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Gönderen Kullanıcı</th>";
echo "<th>Uye tarihi</th>";
echo "<th>Mail Adres</th>";
echo "</tr>";
while ($yaz3=mysqli_fetch_array($d,MYSQLI_ASSOC)) {
   echo "<tr>";
   echo "<td>$yaz3[uye_id]</td>";
   echo "<td>$yaz3[uye_adi]</td>";
    echo "<td>$yaz3[uye_tarih]</td>";
   echo "<td>$yaz3[uye_eposta]</td>";
   echo "</tr>";
   }


?>


</div>


</body>
</html>
