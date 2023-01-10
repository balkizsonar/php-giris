<?php

/*
    print_r()
    var_dump()
    explode()
    implode()
    count()
    is_array()
    shuffle()
    array_combine()
    array_count_values()
    array_flip()
    array_key_exists()

 */

$arr = [
    'ad' => 'tayfun',
    'soyad'=> 'erbilen',
    'yas'=> 24

];

//print_r($arr);
//var_dump($arr);
/*
var_dump, print_arr'dan daha detaylı çıktı veriyor.
*/

$test = 'tayfun,erbilen,udemy';
$arr = explode(',', $test);

//print_r($arr);

$string = implode('|' , $arr);
//echo $string;

//echo count($arr);  //dizi içindeki eleman sayısını gösterir.


/*

if (is_array ($string)){
    echo 'bu bir dizidir';
} else {
    echo 'bu bir dizi değildir!';
}

*/

/*
if (is_array ($arr)){
    echo 'bu bir dizidir';
} else {
    echo 'bu bir dizi değildir!';
}

*/

$arr  = [1,2,3,4,5,6,7,8,9,10];
print_r($arr);




?>