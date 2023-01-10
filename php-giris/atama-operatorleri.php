<?php

/*

      Atama Operatörleri
          = değer atama
          += arttırarak değer atama
          -= azaltarak değer atama
          /= bölerek değer atama
          *= çarparak değer atama
          ½= modunu alarak değer atama
          . birleştirme operatörü
          .= birleştirerek değer atama
 

*/

$a = 5;
//$a += 5; //$a = $a + 5;
//$a -= 5; //$a = $a - 5;
//$a /= 5; //$a = $a / 5;
//$a *= 5; //$a = $a * 5;
$a %= 5; //$a = $a / 5;


$ad = "Tayfun";
$soyad = "Erbilen";

//echo $ad . $soyad;

echo $ad .= " " . $soyad; // $ad = $ad . $soyad; 

echo $ad;

?>