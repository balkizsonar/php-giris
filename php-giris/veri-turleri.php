<?php

/*
Veri Türleri (Data Types)
             String "tayfun erbilen" 'tayfun erbilen'
             İnteger 500, 200
             Float (Double) 5.5, 7.2
             Boolean (true, false)
             Arrey (dizi)
             Object (Nesne)
             NULL
        gettype ()     
        



*/

$string = "tayfun erbilen";


$int = 500;// sayı
$float = 5.5;// buçuklu ya ad noktalı sayı
$bool = true;// true false içerir
$array = array();// dizi depolar [] köşelitırnak ta kullanılır
$object = new stdClass; // nesne veri türü
$null = NULL; //eğişken var ama değeri olmadığında null kullanırız

echo gettype($object);
echo gettype($null);

?>