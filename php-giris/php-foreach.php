<?php
/*
foreach (ARRAY as KEY => VALUE){

}
*/

$sayilar = [1,2,3,4,5,6,7,8,9,10  ];

foreach($sayilar as $sayi){ //dizideki tüm eleman sayısı kadar veri verir
    echo $sayi . '<br>';
}


$uyeDetay = [     // bunun için önce keylerimizi bir değişkene eşitleriz(atarız.)
     'ad' => 'Tayfun',
     'soyad'=>'Erbilen',
     'yas' => 24

];


foreach($uyeDetay as $key => $val){ //sonra da atadığımız değişken as $değişken ve varda valuesu yoksa
    //sayı tanımlıysa value suna tanımlı olan keyini sorgularız.
    echo $key . ':' . $val . '<br>';
}

?>