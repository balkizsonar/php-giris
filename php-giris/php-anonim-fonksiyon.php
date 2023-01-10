<?php

function test(){
    return 'test';
}

echo test();


$test = function($par){
     return 'test' . $par;
};

//echo $test('tayfun');



/*
DİZİ İÇİNDE ANONİM FONKSİYON DEPOLAMA
*/

$arr = [
    function(){
        return '1. fonksiyon';
    },

    function(){
        return '2.fonksiyon';
        },

    function(){
            return '3. fonksiyon';
        },

    ];

    //echo $arr[1]();
     //echo($arr)[rand(0,2)]();

     $soyad = 'Erbilen';


    $soyad = 'Erbilen';

    function filtrele($isim)
    {
        global $soyad;
        return $isim . ' ' . $soyad;

    }


 
    $arr =['Tayfun','Güner','Meltem','Zeynep'];
    $arr = array_map (function ($isim)use($soyad){
        return $isim . 'Erbilen';
    },
    $arr);

    print_r($arr);








?>