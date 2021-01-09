<?php
 require '../vendor/autoload.php';

 use App\Controllers\Persegipanjang;

 ?>


<!DOCTYPE html>
<html>
<head>
<title>Bangun Datar</title>
</head>
<body>
<h1>Composer</h1>


 <h2>Persegi Panjang</h2>
<form action="" method="post">
<table>
<tr><td>Panjang <input type="text" name="panjang"></td></tr>
  <tr><td>Lebar <input type="text" name="lebar"></td></tr>
  <tr><td><input type="submit" name="proses"></td></tr>
</table>
</form>

<?php

$Persegipanjang = new Persegipanjang;
$Persegipanjang->Bangunan();

?>

</body>
</html>