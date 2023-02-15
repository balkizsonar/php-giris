<?php
session_start();//bundan önce hiçbir şey yazamazsın

/*
$_SESSION['uye'] = [ // uye içindeki kullanıcı adını dizi olarak oluşturduk
    'kullanici_adi' => 'balkız',
    'sifre' => '123'
];
*/

//print_r($_SESSION);



//setcookie('uye[id]', 1, time() + 86400);
//setcookie('uye[kullanici_adi]', 'tayfun', time() + 86400);
//setcookie('uye[sifre]', 123, time() + 86400)

print_r($_COOKIE);





?>