<?php

/*
    Değişkenler 
        $ işareti ile tanımalanırlar.
        Harf veya _ (alt tre) karakteri ile başlarlar.
        Sayı ile başlayamazlar.
        Türkçe karakterler içerebilir.
        Büyük-küçük harfe duyarlıdırlar. (case-sensitive)
*/

$balkiz = "balkız sonar";
 echo $balkiz;


$prototürk = "http://prototurk.com";// türkçe karakter ierebilir ama kullanmasak daha iyi
echo $prototürk;



$_balkiz = "balkız sonar";// _ alt çizgi ile başlayabilir
echo $_balkiz;


$Balkiz = "Balkız Sonar";// büyük küçük harfe duyarlılık vardır
echo $Balkiz;

$baLkiz = "balkız"
echo $baLkiz; //bu yukarıdaki balkizdan farklı bir değişkendir çünkü "L" büyük ve farklı değişken olarak farklı değer depolayabilir


// = // eşittir bir atamama operatgörüdür.
?>