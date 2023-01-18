<?php
/**
 * Author: Ozan SONAR
 * Mail : ozansonar1@gmail.com
 * User: ozan-mba
 * Date: 15.01.2023
 * Time: 12:45
 */

/**
 * Gözün korkmasın yaparsın... İlerki günleri düşünerek çalış...
 * SORU AÇIKLAMASI
 * Sistem 3 adet veri alsın
 * 1.birinci sayı tipi: input
 * 2.ikinci sayı tipi:input
 * 3.yapılacak işlem (toplama,çıkartma,çarpma,bölme) tipi: raido şeklinde olsun
 * Formun sonuna gönder butonu eklensin ve tıklandığında:
 *  Toplama seçildiyse: birinci sayı ve ikinci sayı toplanıp ekrana : Toplama işlemi sunucunuz: xx diye yazsın
 *  Çıkartma seçildiyse: birinci sayı i
 * */

    if(isset($_POST) && isset($_POST["hesapla"])){
        //echo "<pre>";print_r($_POST);echo "</pre>";exit; //echo ile posttan değerler geliyor mu kontrol ediyoruz.

        //kullanıcıdan gelen verileri değişkenlerimize aktarıyoruz
        $sayi1 = (int)$_POST["sayi1"]; //posttan gelen sayi1 değerini $sayi1 değişkenine atadık.
        $sayi2 = (int)$_POST["sayi2"];//i
        $islem = (int)$_POST["islem"];

        //şimdi gelen verilere bakıyoruz doğru mu çalışıyor mu
        //echo "sayı 1: ".$sayi1." sayı 2:".$sayi2." işlem :".$islem;

        if(empty($sayi1)){
            echo "Lütfen birinci sayıyı giriniz.<br>";
        }elseif (empty($sayi2)){
            echo "Lütfen ikinci sayıyı giriniz<br>";
        }elseif (empty($islem)){
            echo "Lütfen yapmak istedğiniz işlemi seçiniz.<br>";
        }else{
            if($islem == 1){
                $sonuc = $sayi1+$sayi2;
            }elseif($islem == 2){
                $sonuc = $sayi1-$sayi2;
            }elseif ($islem == 3){
                $sonuc = $sayi1*$sayi2;
            }else{
                $sonuc = $sayi1/$sayi2;
            }
            echo "İşeminiz sonucu :".$sonuc;
        }

    }
    ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>

</head>
<body>

<form action="" method="post">
    <div style="background-color: lightblue;padding: 10px;margin-bottom: 10px;">
        <label for="">Sayı 1</label>
        <input type="number" name="sayi1">
    </div>
    <div style="background-color: lightcoral;padding: 10px;margin-bottom: 10px;">
        <label for="">Sayı 2</label>
        <input type="number" name="sayi2">
    </div>
    <div style="background-color: lightcoral;padding: 10px;margin-bottom: 10px;">
        <h3>İşlem</h3>
        <label>Toplama</label>
        <input type="radio" name="islem" value="1">
        <br>
        <label>Çıkartna</label>
        <input type="radio" name="islem" value="2">
        <br>
        <label>Çarpma</label>
        <input type="radio" name="islem" value="3">
        <br>
        <label>Bölme</label>
        <input type="radio" name="islem" value="4">
        <br>
    </div>
    <div style="background-color: lightsalmon;padding: 10px;margin-bottom: 10px;">
        <button type="submit" name="hesapla">HESAPLA</button>
    </div>
</form>


</body>
</html>
