<?php

$yer = 'Afrikada';
$sayi = '5';
$tur = 'maymun';


//echo $yer . ' ' .  $sayi .  'tane' . $tur . 'var.';
echo'<br>';


$yer = 'Africa';
$sayi = 5;
$tur = 'monkeys';
//echo 'There are' . $sayi . $tur . 'in' . $yer .'.';


//printf('%s %d tane %s var.', 'Afrikada', 5, 'maymun');
//echo '<br>';
//printf('There are %2$d %3$s in %1$s.', 'Africa', 5, 'monkeys');


$tarih = '2018-7-6';
echo vsprintf('%d-%d-%02d' , explode('-', $tarih));  // explode ile dizi haline getiriyoruz tek parametreyi dizi olarak ekliyoruz.

// 02 o dan iki tane olsun demek


//echo  sprintf('Pi %.2f tür.', 3.14) // saklar ekrana yazdırmaz ta ki biz echo diye belirtene kadar








?>

