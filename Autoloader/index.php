<!DOCTYPE html>
<html>
<head>
<title>Autoloader</title>
</head>
<body>
<h1>Autoloader</h1>


<h2>Jajargenjang</h2>
<form action="" method="post">
<table>
<tr><td>Alas <input type="text" name="alas"></td></tr>
  <tr><td>Tinggi <input type="text" name="tinggi"></td></tr>
  <tr><td><input type="submit" name="proses"></td></tr>
</table>
</form>

<?php
function autoloadDatar ($Jajargenjang)
{

$file = "Bangun_Datar/{$Jajargenjang}.php";
if (is_readable($file)) {
require $file;
}
}

spl_autoload_register("autoloadDatar");

$jajargenjang = new Jajargenjang;
$jajargenjang->Datar();

?>


</body>
</html>

