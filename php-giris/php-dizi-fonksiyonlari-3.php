<?php
/*
    array_values()
    array_push()
    array_unshift()
    array_keys()
    current()
    end()
    next()
    prev()
    reset()
    extract()
    asort()

    arsort()
    ksort()
    krsort()
*/

$arr = [
    'ad' => 'tayfun',
    'soyad' => 'erbilen',

];

$arr2 = array_values($arr);
$arr = ['tayfun', 'erbilen', 'tayfun', 'erbilen', 'udemy'];
//print_r($arr);
$arr2 = array_unique($arr);
//print_r(array_values($arr2));
// array_values  dizideki değerleri yeniden sıralar, dizite aktarır.

$arr =  ['tayfun','erbilen'];
array_push($arr,'udemy', 'prototürk', '93academy');// dizi sonuna yeni değer eklemeye yarar,
// anahtar değer ekleyemeyiz.

$arr['anahtar'] = 'yeni değer'; // alternatifi budur bununla anahtar değer ekleyebiliriz.
//print_r($arr);


$arr =  ['tayfun','erbilen'];
array_unshift($arr,'udemy'); // değeri başa alır.
//print_r($arr);
$arr2 = [
    'site' => 'udemy'
];
$arr = array_merge($arr2, $arr); //anahtarlı bir şekilde başa getirir.
//print_r($arr);
/*
$arr = [
    'ad' => 'tayfun ',
    'soyad' => 'erbilen',
    'a'=>[
        'b' => 'c',
        'd' => [
            'e'=> 'f'
        ]
    ]
];
$keys = array_keys($arr); //dizideki anahtarları bize verir .
print_r($keys);*/


$arr = [
    'ad' => 'tayfun ',
    'soyad' => 'erbilen',
    'a'=>[
        'b' => 'c',
        'd' => [
            'e'=> 'f'
        ]
    ]
];
$keys = array_keys($arr); //dizideki anahtarları bize verir.

function _array_keys($arr)
{
    static $keys =[];
    foreach ($arr as $key => $val){
        array_push($keys, $key);
        if (is_array($val)){
            _array_keys($val);

        }

    }
    return $keys;
}

$keys = _array_keys($arr);
//print_r($keys);


$arr = ['tayfun', 'erbilen', 'udemy', 'prototurk', '93 academy'];
/*
echo current($arr) . '<br>' ; //dizinin ilk elemanını bulur
echo next($arr) . '<br>' ;//dizi içerisinde ileri elemanı verir/
//ilk elemandan sonra gelen erbileni verir.

echo next($arr) . '<br>' ;//bir sonraki eleman udemy
echo prev($arr) . '<br>' ;//dizi içerisinde geri elemanı verir/
//udemy den bir geri gider erbileni tekrar verir

reset($arr);
echo next($arr) . '<br>' ;//erbilenden bir sonraya geçer udemy yi verir
//echo end($arr); //dizinin son elemanını verir.

*/

$arr =[
    'ad' => 'tayfun',
    'soyad' => 'erbilen'
];
extract($arr); //dizideki anahtarları değişken gibi görmemizi sağlar.
//echo $ad;


$arr = [3,1,6,4];
//print_r($arr);
//asort($arr); //küçükten büyüğe sıralamaya yarıyor
//arsort($arr);//büyükten küçüğe doğru sıralar
//print_r($arr);

$arr =  [
    'c'=> 'değer 3',
    'a'=> 'değer 1',
    'b'=> 'değer 2'
    ];
//ksort($arr); //anahtara göre küçükten büyüğe sıralar  abc ise cba olur
krsort($arr); //anahtara göre büyükten küçüğe sıralar  bca ise abc olur
print_r($arr);



















?>