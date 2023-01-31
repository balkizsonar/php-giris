<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


// include//include ile dosya çağırdığımızda o dosya bizde yoksa bile sadece warning verir ve çalıştırmaya devam eder.
//require// require ile dosuayı çağırdığımızda dsya yoksa fatal error ölümcül hata verir ve sistemin çalışmasını durdurur.



//include 'testi.php';
//@include 'testi.php';//başına@ koyarsak htayı göstermiyor.
//require 'testi.php';



//include 'a.php';
//require 'a.php';
//include ('a.php');//böyle fonksiyonmuş gibi de kullanabiliyoruz dosyayı aynı işlevle çağırıyor.
//require ('a.php');

    //include_once 'a.php';//bu dosyayı sayfa boyunca sadece 1 kez çağırmamızı sağlar
//bunu ne kadar tekrar edersek edelim bir tane gelir çağırılmış olarak
    //include_once 'a.php';
    //include_once 'a.php';
    //include_once 'a.php';
    //include_once 'a.php';//sonuç sadce bir tane "bunu sonradan yazdın" kısmı
//require_once 'a.php';
//require_once 'a.php';
//require_once 'a.php';
//require_once 'a.php';//aynı işlemi yapıyor dosyayı sadece 1 kere çağırır bu da ama hata olursa bu fatal error verir
//ve sistemin çalışmasını yine durdurur.

//echo "deneme";

$title = 'Balkız Sonar';

echo $title;

  require 'header.php';
echo $test;
?>
    content

<?php

require 'footer.php';



?>























