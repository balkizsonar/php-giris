<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$ilArray = [
 1=>"ÇORUM",
 2=>"ANKARA",
 3=>"ANTALYA",
 4=>"İSTANBUL"
];
$ilceArray = [
 1=>"MERKEZ",
 2=>"ÇANKAYA",
 3=>"YENİMAHALLE",
 4=>"ELMADAĞ"
];
$mahalleArray=[
   1=>"KALE",
   2=>"BAHÇELİEVLER",
   3=>"DEMETGÜL",
   4=>"DEMİRKAPI",
];



if(isset ($_POST) && isset($_POST["kaydet"]) ){
    //echo "<pre>";print_r($_POST);echo "</pre>";

    //post değişkeni varsa ve postun içinde kaydet key'i varsa kaydet butonunu çalıştır ekrana yazdır echoyla dedik.
//BURASI BUTTONA BASILDIĞINDA ÇALIŞAN ALAN DEĞİŞKEN ATAMALARINI VE KONTROLLERİNİ EMPTY GİBİ BU SÜSLÜ PARANTESZ
    //İÇİNDE BİTİR!!!!!!!!


    $ad = $_POST["ad"] ?? null;
    $soyad = $_POST["soyad"] ?? null;
    $telefon = $_POST["telefon"] ?? null;
    $email =$_POST["email"] ?? null;
    $il = $_POST["il"] ?? null;
    $ilce = $_POST["ilce"] ?? null;
    $mahalle = $_POST["mahalle"] ?? null;
    $acikadres = $_POST["acikadres"] ?? null;
    $kart = $_POST["kart"] ?? null;
    $ay = $_POST["ay"] ?? null;
    $cvv = $_POST["cvv"] ?? null;




    if(empty($ad)){
        echo "adınızı yazınız";
    }elseif (empty($soyad)){
        echo "soyad yazınız";
    }elseif (empty($telefon)){
        echo "telefon no giriniz";
    }elseif (empty($email)){
        echo "email giriniz";
    }elseif (empty($il)){
        echo "il seçiniz";
    }elseif (empty($ilce)){
        echo "ilçe seçiniz";
    }elseif (empty($mahalle)){
        echo "mahalle seçiniz";
    }elseif (empty($acikadres)){
        echo"açık adres bilgilerinizi yazınız";
    }elseif(empty($kart)){
        echo "kart numaranızı giriniz";
    }elseif(empty($ay)){
        echo "son kullanma tarihi seçiniz";
    }elseif(empty($cvv)){
        echo "cvv giriniz";
    }else{

        echo  'Merhaba' . $ad . '<br>'. $soyad .'<br>' . 'telefon numaranız:' . $telefon .'<br>'. 'e-postanız:'. $email .'<br>'.'il:'. $ilArray[$il] .'<br>'
            . 'ilçe:'. $ilceArray[$ilce] . '<br>' .'mahallesi:' . $mahalleArray[$mahalle] .'<br>'  . 'açık adresiniz:'. $acikadres .'<br>' . 'kart numaranız:'.
            $kart .'<br>' . 'kartınızın son kullanma tarihi:' . $ay . '<br>' ."cvv'niz:". $cvv . 'sayılarından oluşmaktadır.';
       // print_r($_POST);
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        $mesaj = "Merhaba ".$ad." ".$soyad."<br>";
        $mesaj .= "Telefon:" .$telefon."<br>";
        $mesaj .= "Email:" .$email."<br>";
        $mesaj .= "İl:".$ilArray[$il]."<br>";

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




<form action="" method="POST">

          Adres Bilgileri:
          <hr>
          <div>
              <label>
              Ad*
              <input type="text" placeholder="Ad" name="ad" value="<?php echo $_POST["ad"] ?? null; ?>">
              </label>
              <label>
              Soyad*
              <input type="text" placeholder="Soyad" name="soyad" value="<?php echo $_POST["soyad"] ?? null; ?>">
              </label>
          </div>
          <div>
              <br>
              <label>
              Telefon*
                  <input type="tel" placeholder="Telefon no giriniz" name="telefon" value="<?php echo $_POST["telefon"] ?? null;?>" >
              </label>
              <label>
                  E mail*
                  <input type="email" placeholder="E mail" name="email" value="<?php echo $_POST["email"] ?? null; ?>"><!--bu son kısmı yazarak değerler girildiğinde ekranda yazdırmasını sağlıyoruz tek tek.-->
              </label>
              <br>
              <div>
                  <label>
                      <br>
                  ADRES*<hr>
                  İl*<br>
                  <select name="il" id="il">
                      <option value="">--İL--</option>
                      <option <?php echo isset($il) && $il == "1" ? "selected": null;?> value="1">ÇORUM</option>
                      <option <?php echo isset($il) && $il == 2 ? "selected":null; ?> value="2">ANKARA</option>
                      <option <?php echo isset($il) && $il == "3" ? "selected": null;?> value="3">ANTALYA</option>
                      <option <?php echo isset($il) && $il == "4"? "selected": null; ?> value="4">İSTANBUL</option>
                      <br>
                  </select>


              </div>
              <div>

                  İlçe*<br>
                  <select name="ilce" id="ilce">
                      <option value="" >--İLÇE--</option>
                      <option <?php echo isset($ilce) && $ilce == "1" ? "selected" : null;?> value="1">MERKEZ</option>
                      <option <?php echo isset($ilce) && $ilce == "2" ? "selected": null;?> value="2">ÇANKAYA</option>
                      <option <?php echo isset($ilce) && $ilce == "3" ? "selected": null;?> value="3">YENİMAHALLE</option>
                      <option  <?php echo isset($ilce) && $ilce == "4" ? "selected" : null; ?> value="4">ELMADAĞ</option>
                      <br>
                      </label>
                  </select>
              </div>
              <div>

                  Mahalle*<br>
                  <select name="mahalle" id="mahalle" >
                      <option value="">--MAHALLE--</option>
                      <option   <?php echo isset($mahalle)  && $mahalle ==  "1" ? "selected" : null; ?> value="1">KALE</option>
                      <option   <?php echo isset($mahalle)  && $mahalle==   "2" ? "selected" : null; ?> value="2">BAHÇELİEVLER</option>
                      <option   <?php echo isset($mahalle)  && $mahalle ==  "3" ? "selected" : null; ?> value="3">DEMETGÜL</option>
                      <option   <?php echo isset($mahalle)  && $mahalle ==  "4" ? "selected" : null; ?> value="4">DEMİRKAPI</option>
                  </select>
              </div>
              <div>
                  AÇIK ADRES*
                  <br>
                  <textarea name="acikadres" placeholder="Açık Adres Giriniz" cols="20" rows="10"></textarea>

          <hr>

            <div>
                KART BİLGİLERİ<br>
                Kart Numarası<br>
                <input type="number" value="kart" name="kart"><br>
                Son Kullanma Tarihi*<br>
                <input type="month" name="ay" value="ay">
                CVV*
                <input type="number" name="cvv" value="cvv">
                <br>
            </div>

              <button type="submit" name="kaydet" value="kaydet" >KAYDET</button>


              </div>

            </div>











          </form>
      </html>