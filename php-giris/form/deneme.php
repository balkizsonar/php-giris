
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//print_r($_POST);
if (isset ($_POST) && isset($_POST["hesapla"])) {
    //echo "<pre>";print_r($_POST);echo "</pre>";exit;


    $sayi1 = (int)$_POST["sayi1"];
    $sayi2 = (int)$_POST["sayi2"];
    $sayi3 = (int)$_POST["sayi3"];
    $sayi4 = (int)$_POST["sayi4"];




    if (empty($sayi1)) {
        echo "birinci sayıyı giriniz";
    } elseif (empty($sayi2)) {
        echo "ikinci sayıyı giriniz";
    } elseif (empty($sayi3)) {
        echo "üçüncü sayıyı giriniz";
    } elseif (empty($sayi4)) {
        echo "dördüncü sayıyı giriniz";
    } else {

        $toplamOrtalama = $sayi1 + $sayi2 + $sayi3 + $sayi4;
        $sonuc = $toplamOrtalama / 4;

        if ($sonuc >= 50) {
            echo "başarılı";
        } else {
            echo "geçmiş olsun kanki";

            echo "Not ortalaması:" . $sonuc;
        }


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
<div>
    <label><br>
        ORTALAMA HESAPLAMA<br>
        <input type="number" name="sayi1" placeholder="birinci sayı">
    </label>
    <label>
        <input type="number" name="sayi2"  placeholder="ikinci sayı">
    </label>
    <label>
        <input type="number" name="sayi3"  placeholder="üçüncü sayı">
    </label>
    <label>
        <input type="number" name="sayi4"  placeholder="dördüncü sayı">
    </label>
<div>
    <hr>
    <button type="submit"  name="hesapla">NOT ORTALAMASI</button>
</div>



</form>
</body>
</html>
