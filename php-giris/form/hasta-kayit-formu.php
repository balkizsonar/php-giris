<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


if (isset ($_POST) && isset($_POST["kaydet"])) {
    $cinsiyetArray = [
        1 => "Erkek",
        2 => "kadın",
    ];

    $ad = $_POST["ad"] ?? null;
    $soyad = $_POST["soyad"] ?? null;
    $email = $_POST["email"] ?? null;
    $cinsiyet = $_POST["cinsiyet"] ?? null;
    $dogum_tarihi = $_POST["dogum_tarihi"] ?? null;
    $boy = $_POST["boy"] ?? null;
    $kilo = $_POST["kilo"] ?? null;

    if (empty($ad)) {
        echo "ad giriniz";
    } elseif (empty($soyad)) {
        echo "soyad giriniz";
    } elseif (empty($email)) {
        echo "email";
    } elseif (empty($cinsiyet)) {
        echo "cinsiyet giriniz";
    } elseif (empty($dogum_tarihi)) {
        echo "doğum tarihi giriniz";
    } elseif (empty($boy)) {
        echo "boy giriniz";
    } elseif (empty($kilo)) {
        echo "kilo giriniz";
    } else {
        //1 erkek
        //2 kadın
        $cinsiyetYazi = "kadın";
        if($cinsiyet == 1){
            $cinsiyetYazi = "erkek";
        }
        $mesaj = "Merhaba ".$ad." ".$soyad."<br>";
        $mesaj .= "Email adresiniz: ".$email."<br>";
        //$mesaj .= "Cinsiyet:".$cinsiyetArray[$cinsiyet]."<br>";
        //$mesaj .= "Cinsiyet:".$cinsiyetYazi."<br>";
        $mesaj .= "Cinsiyet:".($cinsiyet == 1 ? "Erkek":"kadın")."<br>";
        $mesaj .= "Doğum tarihi:".$dogum_tarihi."<br>";
        $mesaj .= "Boy:".$boy."<br>";
        $mesaj .= "Kilo:".$kilo."<br>";
        echo $mesaj;
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
    <div>

        <hr>
        HASTA KAYIT FORMU
        <hr>
        AD-SOYAD<br>
        <input type="text" placeholder="adınız:" name="ad">
        <input type="text" placeholder="soyadınız" name="soyad"><br>
        <br>
        E-Mail
        <input type="email" placeholder="email giriniz" name="email"><br>
        <br>
        <label>
            Cinsiyet<br>
            Erkek:
            <input type="radio" name="cinsiyet" value="1">
        </label>
        <label>
            Kadın:
            <input type="radio" name="cinsiyet" value="2">
        </label>
        <br>
        <br>
        <div>
            Doğum Tarihi:
            <input type="date" name="dogum_tarihi">
        </div>
        <br>
        <div>
            Boy(cm):
            <input type="number" name="boy">
        </div>
        <br>
        <div>
            Kilo(kg):
            <input type="number" name="kilo">
        </div>
        <hr>
        <div>
            <button type="submit" name="kaydet">KAYDET</button>
        </div>


    </div>


</form>

</body>
</html>