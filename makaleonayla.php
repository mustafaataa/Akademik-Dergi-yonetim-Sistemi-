<!DOCTYPE html>
<html>
<head>
	<title>Makale Onayla</title>
</head>
<body>
<?php require("admin.php");
?>

<div class="a" style=" width:300px; margin-right: 300px; float: right; margin-top: 20px; color:blue;" >
   <table class="table table-striped">
   <thead><th>Durum İd</th> <th>Durum Adı</th> </thead>
   <tr><td>1</td> <td>Makale Yuklendi</td> </tr>
   <tr> <td>2</td> <td>Editor Onayladi</td> </tr>
<tr> <td>3</td> <td>Editor Onaylamadi</td> </tr>

     </table>
     </div>



 <form id="Login" method="POST"  action="editormakaleonayla1.php" style="width:250px; margin-left:400px; margin-top:40px;">

 		 <div class="form-group">
            <input type="text" class="form-control" id="id" name="id" placeholder="Makale İd" required="required">
        </div>


         <div class="form-group">
            <input type="text" class="form-control" id="durumid" name="durumid" placeholder="Durum İd" required="required">
        </div>
         <div class="form-group">
            <input type="text" class="form-control" id="durumaciklama" name="durumaciklama" placeholder="Kabul veya Red Sebebi" required="required">
        </div>
 <br>
        <button type="submit" class="btn btn-primary" style="margin-left: 50px;">Güncelle</button>
    </form>
<br><br><br>


</body>
</html>
