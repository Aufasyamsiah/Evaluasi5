<?php

namespace App\Controllers;

class Persegipanjang
{
   function Bangunan()
   {
      if (isset($_POST['luas'])){
      $panjang=$_POST['panjang'];
      $lebar=$_POST['lebar'];
      $Luaspersegipanjang= $panjang * $lebar;

      echo "panjang = $panjang <br>";
      echo "lebar = $lebar <br>";
      echo "Luas = " . $Luaspersegipanjang ;
   };

    }
      }

?>