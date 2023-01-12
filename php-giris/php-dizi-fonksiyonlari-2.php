<?php
/*
    array_map()
    array_filter()
    array_merge()
    array_rand()
    array_reverse()
    array_search()
    in_array()
    array_shift()
    array_pop()
    array_slice()
    array_sum()
    array_product()
    array_unique()
*/
/*
function filtrele($val){
    return $val * 2;

}

$arr = [1,2,3,4,5];
$arr2 = array_map('filtrele', $arr);

print_r($arr2);

*/


function filtrele($val){
    return $val . 'balik' ;

}

$arr = [1,2,3,4,5];
$arr2 = array_map('filtrele', $arr);
$arr = array_map(function($val){
    return $val . 'balik' ;
}, $arr);
//print_r($arr2);

    //anonim fonksiyon diziyi geriye döndürür koşul
    // yerine gelmeyen elemanların değerlerini boş gösterir.



$arr = ['', 'tayfun','','erbilen'];
print_r($arr);
$arr = array_filter($arr);
//print_r($arr);


$arr = [1,2,3,4,5];
$arr2 = array_filter($arr, function($item){
    return $item > 2 && $item < 5 ;

});//


$arr = array_map(function($val){
    if ($val > 2 && $val < 5){
        return $val;
    }
},$arr);
//print_r($arr2);//array_map yalnızca filtrelediğim dizimi döndürür.


$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr = array_merge($arr1, $arr2);
//print_r($arr);

/*
$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen',
    'yas' => 24,
    'site' => 'erbilen.net'
];
$random = array_rand($arr, 2);

print_r($random);
*/



$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen',
    'yas' => 24,
    'site' => 'erbilen.net'
];
$random = array_rand($arr, 2);
$values = array_map(function($key) use($arr){
    return  $arr [$key];
}, $random);
//print_r($values); //rastgele değer gösterir.



$arr = [1,2,3,4,5];
//print_r($arr);

$arr = array_reverse($arr);
//print_r($arr); // tersine çevirir 1,2,3 ü 3,2,1 yapması gibi.

/*
$arr = [
    'ad'=> 'tayfun',
    'soyad'=> 'erbilen'
];

$test = array_search('erbilen', $arr);
//echo $test;
*/

$arr = [
    'ad'=> 'tayfun',
    'soyad'=> 'erbilen',
    'a'=>[
        'b'=>[
            'c' => 'd'
        ]
    ]
];

$test = array_search('erbilen', $arr);
//echo $test;

function _array_search($cur_val, $arr)
{
    foreach ($arr as $key => $val){
        if ($val == $cur_val){
            return true;
        }
        if (is_array($val)){
            return _array_search($cur_val, $val);
        }
    }
    return false;
}

$test = _array_search('d', $arr);
//echo $test

$arr = [1,2,3,4];
        /*
if (in_array('3', $arr))
{
    echo'3 değeri var';
}else{
    //echo'yok';
}
 //in_array'de 1. durum// $arr değişkeninde '3' değişkeni var olarak cevap döner.
        */
        /*
if (in_array('6', $arr))
{
    echo'3 değeri var';
}else{
    echo'yok';
} // in_array' da 2. durum // $arr değişkeninin içinde '6 değeri var mı diye baktık ve sonuç: yok '

     */

$arr = [1,2,3,4,5];
//$ilk_eleman = array_shift($arr);
$son_eleman = array_pop($arr);
//print_r($arr);
//echo $son_eleman;
//echo $ilk_eleman;

$arr = [1,2,3,4,5];

$arr2 = array_slice($arr, 2);
//print_r($arr2); // ilk 2 elemanı göstermedik

$arr3 = array_slice($arr, 2, 2); //3 ten başla 2 tane seç dedik. ilk sayı başlanacak sayı,
//ikinci sayı ise kaç adet gösteriecek onu söylüyor.
//print_r($arr3);

$arr4 = array_slice($arr, -2 ); // -2 dersek son iki elemanı seçer.
//print_r($arr4);

//$arr = [1,2,3,4,5];
$toplam = array_sum($arr); //array_sum dizideki değerleri toplar.
//echo $toplam;

$arr = [1,2,3,4,5];
$carpim = array_product($arr); //dizideki değerleri çarpar.
//echo $carpim;

$arr = ['tayfun', 'erbilen', 'tayfun', 'erbilen', 'udemy'];
print_r($arr);
$arr2 = array_unique($arr); //dizideki tekrarlanan elemanların tekrarını kaldırır benzersiz olamsını sağlar
print_r ($arr2);





?>