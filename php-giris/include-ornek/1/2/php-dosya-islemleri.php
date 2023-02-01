<?php
//dosya oluşturma
//touch() fonksiyonuyla dosya oluşturuyoruz.iki parametre alır bu fonksiyon birinci
//$filename(dosya adı içeren değişken) ve ikincisi int $time parametresi zaman bilgisi alır
//kullanımı şu şekilde olur //////********* touch(string $filename[, int $time = time() [, int $atime]])  *****///////

    touch('test.txt', time()-84000);





?>