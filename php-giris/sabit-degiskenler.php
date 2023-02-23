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
// ilk değer sabit değişkenimizin adıdır ikinci sırada virgülden sonra ise sabit değkenimizn değeri yazılır.
define("tayfun", "tayfun erbilen");// define sabit değişken demek //sayı ile balayamaz object veri türünü taşıyamaz
// $  ile başlayamaz diğer değişkenler başlayabiliyor.
echo tayfun;// echo tayfun üstteki birinci sıradan gelir değişken adıdır bundan sorgulama yparız// ekrana ikinci sıradaki değer yazılır.
//define php tarafından tanımlanmış bir fonksiyondur ve değeri bir kere atanır ve kimse tarafından değiştirilemez
?>