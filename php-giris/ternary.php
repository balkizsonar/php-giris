 <?php

$a = 5;

/*
Ternary - Üçlü Operatör
*/

/*if ($a == 5){
    echo "a 5 e  eşit";
} else {
    echo "a 5 e eşit değil";
}
*/

//echo $a == 5 ? "a 5 e eşit" : "a 5 e eşit değil";


$cinsiyet = 1;
$cinstiyetArray = [
    1 => "Balkız",
    2 => "Ozan",
];

echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";
echo "yöntem 1 :ben bir ".($cinsiyet == 1 ? "kız":"erkek")." bireyim<br>";

//switch case
echo "<br>";


echo "Yöntem 2";
echo "<br>";
switch($cinsiyet){
    case 1:
        echo "ben bir kız bireyim";
        break;
    case 2:
        echo "ben bir erkek bireyim";
        break;
    default:
        echo "hatalı cinsiyet seçimi";
        break;
}
echo "<br>";
echo "<br>";
echo "yontem 3";
echo "<br>";

echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";//burada $cinsiyet değişkenini biz başta 1 olarak tanımlamıştık
 //o yüzden $cinsiyetArray dizisindeki cinsiyet değişkenini alıyoruz ve bu da yukarıda  1 => "Balkız", a eşit
 //olduğundan sonuç "ben bir Balkız biryim" olarak karşımıza çıkar.
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";
echo "ben bir ".$cinstiyetArray[$cinsiyet]." biryim<br>";



?> 
