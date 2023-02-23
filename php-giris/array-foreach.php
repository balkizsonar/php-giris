<?php
$dil = array(
  "Türkçe",// burada key yazılmamış sadece değerler yazılmış bu durumda 0,1,2,... diye arkada key vardır ve değere ulaşmak için bu keyleri kullanırız
  "İngilizce",
  "Fransızca",
  "Çince"
);
//echo "Ben" ." ". $dil[0] ."," . $dil[2] . " "."ve" . " ". $dil[3] ." ". "biliyorum.";
//örneğin $dil[0] ı echo yaparsak alacağımız değer 0 a denk gelen Türkçe olacaktır.

/*----------*/

$hobiArray = [
     "art"=>"resim yapmak",// buradaki örnekte keylerim string ifade olarak elle verilmiş
     "sounds"=>"muzik dinlemek",// key= müzik_dinle buradaki keyimiz muzik_dinle dir NOT:TÜRKÇE KARAKTER OLMAZ müzik_dinle yazamazsın!ÇOK ÖNEMLİ BU KISIM
     "kitap"=>"kitap okumak"// _ alt tre koymak gerekiyor key verirken tre- kullanamayız
];
//echo $hobiArray["resim_yap"];

//echo count($hobiArray) . "<br>" //count tüm elemanları say demek zaten türkçe anlamı say demek
/*
$hobiArr=count($hobiArray);//dizimin içindeki eleamn sayısı bul ve $hobiArr a ata dedik//burda 300 tane eleman olabilirdi bu yüzden şin döngüye sokucaz öncelikle count() umuzu bir değişkene atıyoruz.
for($i=0; $i<$hobiArr; $i++){ //$i=0 deyince sıfırdan başla dedik//$i<$hobiArr;i değişkeni hobiArr dan küçükse //$i++ bi arttır
echo $hobiArray[$i] . "<br>";
}
*/
foreach ($hobiArray as $hobiKey => $hobiValue){
   // echo $hobiKey . " " . $hobiValue. "<br>";
    print_r($hobiArray);
}



?>

