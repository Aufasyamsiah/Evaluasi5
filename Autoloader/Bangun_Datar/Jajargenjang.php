<?php
class Jajargenjang
{
   function Datar()
   {
      if (isset($_POST['luas'])){
      $alas=$_POST['alas'];
      $tinggi=$_POST['tinggi'];
      $luasjajargenjang= ($alas * $tinggi);

      echo "alas = $alas <br>";
      echo "tinggi = $tinggi <br>";
      echo "Luas = " . $luasjajargenjang ;
   };

    }
      }

?>
