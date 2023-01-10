<?php

/*
     Sabit Değişkenler;
          define() fonksiyonu ile tanımlanır
          Türkçe karakterler içerebilir 
          Sayı ile başlayamaz
          Harf ya da _ işaretiyle başlayabilir
          Büyük-küçük harfe duyarlıdır
     Veri Türlerinde;
        Object hariç tüm veri türlerini kapsar

*/

$tayfun = "tayfun erbilen";
//echo $tayfun;

define("tayfun", "tayfun erbilen");
echo tayfun;

?>