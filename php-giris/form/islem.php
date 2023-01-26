<?php


if(isset($_POST) && isset($_POST["hesapla"])){
    //echo "<pre>";print_r($_POST);echo "</pre>";exit;





$sayi1 = (int)$_POST["sayi1"];
$sayi2 = (int)$_POST["sayi2"];
$islem = (int)$_POST["islem"];

   // echo "sayı 1: ". $sayi1." sayı 2:".$sayi2." işlem :".$islem;

    if(empty($sayi1)){
        echo"lütfen birinci sayıyı giriniz";
    }elseif (empty($sayi2)){
        echo"lütfen ikinci sayıyı giriniz";
    }elseif (empty($islem)){
        echo "seçiniz";
    }else{
        if ($islem == 1)
            $sonuc = $sayi1+$sayi2;
        elseif ($islem == 2){
            $sonuc = $sayi1-$sayi2;
        }elseif ($islem == 3){
            $sonuc = $sayi1*$sayi2;
        }else{
            $sonuc = $sayi1/$sayi2;
        }
        echo "işlemin sonucu" . $sonuc;
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

<form action="" method="POST">
    <br>
    İŞLEM<hr>
    <div>
        <label for="">Sayı 1</label>
        <input type="number"  name="sayi1">
    </div>
    <br>
    <div>
        <label for="">Sayı 2</label>
        <input type="number" name="sayi2">
    </div>
    <div>
        <label for="">Toplama</label>
        <input type="radio" name="islem" value="1"><br>
        <label for="">Çıkartma</label>
        <input type="radio" name="islem" value="2"><br>
        <label for="">Çarpma</label>
        <input type="radio" name="islem" value="3"><br>
        <label for="">Bölme</label>
        <input type="radio" name="islem" value="4"><br>
    </div>
    <div>
    <button type="submit" name="hesapla" >HESAP</button>
    </div>
</form>
</body>
</html>