<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$hobilerArray = [ //foreach için hobileri $hobilerArray değişkenine attık
    //keylerini form alanında sayı olarak belirlemiştik onlara göre yanlarına
    //sayının değerini tanımlıyoruz 1=>"Kitap Okumak" aşağıda foreach ile burdan
    // değer sorgulayacağız.
  1 => "Kitap Okumak",
  2 => "Televizyon izlemek",
  3 => "Resim yapmak",
  4 => "Müzik dinlemek"
];

if(isset($_POST) && isset($_POST["gonder"])){ //

    //echo "<pre>";print_r($_POST);echo "</pre>";


    //burada değişkene atıyoruz Posttan gelen değerleri böylelikle daha kolay uşacağız kod israfı olmayacak
    $ad = $_POST["ad"]  ?? null;
    $soyisim = $_POST["soyisim"] ?? null;
    $cinsiyet = $_POST["cinsiyet"] ?? null;
    $email = $_POST["email"] ?? null;
    $telefon = $_POST["telefon"] ?? null;

    //yöntem 1 kısa isset ve data kullanımı
    $hobiler = $_POST["hobiler"] ?? [];
    
    /*
    //yöntem 2 iisset ile kontrollü versiyon
    $hobiler2 = isset($_POST["hobiler"]) ? $_POST["hobiler"]:[];
    //yöntem 3 normal if li versiyon
    if(isset($_POST["hobiler"])){
        $hobiler = $_POST["hobiler"];
    }else{
        $hobiler = [];
    }
*/



echo $cinsiyet;
    if(empty($ad)){     //ad değişkeni boşsa "lütfen adınızı yazınız" yazdır demek
        echo "Lütfen adınızı yazınız.";
    }elseif (empty($soyisim)){ // if çalışmazsa o koşulu atlar 2. koşul gireriz
        echo "Lütfen soyadınızı yazınız";
    }elseif (empty($cinsiyet)){
        echo "Lütfen cinsiyeti seçiniz";
    }elseif (empty($email)){
        echo "Lütfen e-posta adresinizi yazınız";
    }elseif (empty($telefon)){
        echo "Lütfen telefonunuzu yazınız";
    }elseif (empty($hobiler)){
        echo "Lütfen hobilerinizi seçinizs";
    }else{   /// en son diğer koşullar yerine gelmiyorsa else yazarız
        echo 'Merhaba' . $ad . $soyisim .'<br>' . 'Cinsiyetiniz' . $cinsiyet .'<br>'. 'e-postanız'. $email .'<br>'. 'telefonunuz' . $telefon ;//Merhaba Ozan Ssonar cinsiyetiniz:e erkek epostanız: test@com telefonunuz:312312
        echo "<br>hobiler:";
        foreach ($hobiler as $hobi){ //foreach ile $hobilerArray değişkenine atadığımız değişkeni yazdırıyoruz.
            echo $hobilerArray[$hobi]."";
        }
    }

}
/*
$cekirdekAile = ["ozan","balkız","defne","veli"];
if(in_array("veli",$cekirdekAile)){
    echo "var";
}else{
    echo "yok"; // in_array kullanımında önce verileri bir değişkene atıyoruz $cekirdekAile
dizi içinde yazıyor ve if eğer yapısıyla önce içinde aradığımız key "veli" sonra
değişken adı yazarak $ cekirdekaile dizisinde o key"veli" var mı ona bakıp varsa
echo ile "var yazsın diye ayarlıyoruz."
}
*/

?>

<form action="" method="POST">
    <form>
        <div>
            Adınız:

            <input type="text" placeholder="Adınızı giriniz" name="ad" value="<?php echo $_POST["ad"] ?? null; ?>">

        </div>
        <br>
        <div>
            Soyadınız:
            <input type="text" placeholder="Soyadınızı giriniz" name="soyisim"
                   value="<?php echo $_POST["soyisim"] ?? null; ?>">
        </div>
        <hr>
        <form>
            <div>
                <label for="">Cinsiyet:</label>
                <select name="cinsiyet" id="cinsiyet">
                    <option value="">seçiniz</option>
                    <option value="Erkek" <?php echo isset($cinsiyet) && $cinsiyet == "Erkek" ? "selected":null; ?>>Erkek</option>
                    <option value="Kadın" <?php echo isset($cinsiyet) && $cinsiyet == "Kadın" ? "selected":null; ?>>Kadın</option>

                </select>

                <!-- <input type="radio" name="cinsiyet"  value="Erkek">Erkek   ///checked seçili gelmesini sağlar
                  <input type="radio" name="cinsiyet" value="Kadın">Kadın
                type="radio" da name= birbiriyle farklı ise birden çok seçeneği seçebiliriz
               eğer name="cinsiyet" örneğindeki gibi aynı ise birini sadece seçebiriz ekek ya
               da kadın gibi(ikisini aynı anda seçemeyiz).-->
                <hr>
            </div>
            <div>

                E mail:
                <input type="email" placeholder="E-mail Giriniz" name="email"
                       value="<?php echo $_POST["email"] ?? null; ?>">

            </div>
            <hr>
            <div>
                Telefon No:
                <input type="tel" placeholder="Telefon No Giriniz" name="telefon" value="<?php echo $_POST["telefon"] ?? null; ?>">

            </div>
            </div>
            <div>
                <div>
                    <hr>
                    Hobiler:<br>
                    <label>
                        <input type="checkbox" name="hobiler[]" <?php echo isset($hobiler) && in_array(1,$hobiler) ? "checked":null; ?> value="1">Kitap Okumak
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="hobiler[]" <?php echo isset($hobiler) && in_array(2,$hobiler) ? "checked":null; ?> value="2">Televizyon İzlemek
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="hobiler[]" <?php echo isset($hobiler) && in_array(3,$hobiler) ? "checked":null; ?> value="3">Resim Yapmak
                    </label>
                    <br>
                    <label>
                        <input type="checkbox" name="hobiler[]" <?php echo isset($hobiler) && in_array(4,$hobiler) ? "checked":null; ?> value="4">Müzik Dinlemek
                    </label>


                </div>
                <input type="submit" value="Formu Gönder" name="gonder">
            </div>


        </form>
