<!DOCTYPE html>
<html>
<head>
	<title>Makale Onayla</title>
	<title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
<?php require("uzman.php");
?>

<div class="a" style=" width:300px; margin-right: 300px; float: right; margin-top: 20px; color:blue;" >
   <table class="table table-striped">
   <thead><th>Durum İd</th> <th>Durum Adı</th> </thead>
   <tr> <td>4</td> <td>Hakem Onayladi</td> </tr>
<tr> <td>5</td> <td>Hakem Onaylamadi</td> </tr>

     </table>
     </div>



 <form id="Login" method="POST"  action="hakemmakaleonayla1.php" style="width:250px; margin-left:400px; margin-top:40px;">

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
