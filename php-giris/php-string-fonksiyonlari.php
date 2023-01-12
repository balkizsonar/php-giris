<?php
/*
    strlen()
    strstr()
    strpos()
    ucwords() ucfirst() strtolower() strtoupper()
    trim() ltrim() rtrim()
    substr()
    str_replace()
    str_repeat()
*/

    $str = 'tayfun erbilen';

    // echo strlen($str);
    //echo strlen('tayfunerbilen');

    //echo strstr('tayfun erbilen', 'erbilen');  // iafde içerisinde değer arar samanlıkta
// iğne arar.


    //  echo strpos('tayfun erbilen', 'n') //kaçıncı karakter sırasını nosunu söyler

    // echo ucwords($str); //cümledeki her kelimenin baş harfini büyük yazar.

    //echo ucfirst($str);//sadece ilk harf büyük olur.

   //$sttr = strtoupper($str);//tüm harfler büyük

    //echo strtolower($str);//tüm harfler küçük


    $str2 = " -tayfun-erbilen-";
    //echo trim($str2, '-');//boşluk ve tab karakterlerini kaldırır.
   // echo ltrim($str2, '-');// left sağ taraftaki boşuk duruyor sonuçta
    //echo rtrim($str2, '-'); //sol taraftaki boşluklar duruyor hala


    //echo substr($str, 3, 7); //karakteri bölmemizi sağlar,şu karakterden başlasın şuraya kadar göstersin deriz.

$str3 = 'tayfun erbilen, güner erbilen';

//echo str_replace('erbilen', 'talipoğlu',$str3);//değiştirme yapar


    echo str_replace(
    ["tayfun", "erbilen",   "güner"],
    ["ahmet","talipoğlu","hakan"],    // dizideki yer değiştirme kullanımı böyle oluyor.
    $str3
);

    $str3 = str_replace(
    ["tayfun", "erbilen",   "güner"],
    ["ahmet","talipoğlu","hakan"],    // dizideki yer değiştirme kullanımı böyle oluyor.
    $str3
);
//echo $str3;

for ($i = 1; $i <= 10; $i++){
    $repeatCount = ($i <= 5 ? $i : (10 - $i));
    echo str_repeat('*+-!', $repeatCount) . '<br>';
}


//echo str_repeat('*', 10); //10 kadar tekrar et



















?>
