<?php
require_once "baglan.php";
require_once "ortak-degiskenler.php";//ortak değişkenler sayfası dahil ediliyor çünkü burdaki verileri tüm sayfalarda kullanacağız.
require_once "heeader.php";



if(isset($_POST['submit'])){//varlık kontrolü yapmalıyız buton var mı dedik
    //echo "<pre>";print_r($_POST);echo "</pre>";
    $ad = $_POST['ad'] ?? null;
    $soyad = $_POST['soyad'] ?? null;//değer atamamızı yapıyoruz postun içinde soyad varsa değeri ver yoksa  null.
    $email = $_POST['email'] ?? null;
    $telefon_no = $_POST['telefon_no'] ?? null;
    $il = $_POST['il'] ?? null;
    $spor = $_POST['spor'] ?? null;
    $cinsiyet = $_POST['cinsiyet'] ?? null;
    $hobi_resim_yapma = isset($_POST['hobi_resim_yapma']) ? 1:null;
    $hobi_kitap_okuma = isset($_POST['hobi_kitap_okuma']) ? 1:null;
    $hobi_muzik_dinleme = isset($_POST['hobi_muzik_dinleme']) ? 1:null;
    $hobi_yuruyus_yapma = isset($_POST['hobi_yuruyus_yapma']) ? 1:null;



    if (empty($ad)){ //boşluk kontrolümüzü yapıyoruz
        echo 'ad giriniz';
    }elseif (empty($soyad))
        echo 'soyad giriniz';
    elseif (empty($email))
        echo'email giriniz';
    elseif (empty($telefon_no))
        echo 'telefon no giriniz';
    elseif(empty($il)){
        echo 'il seçiniz';
    }elseif(empty($spor)){
        echo 'spor seçiniz';
    }elseif(empty($cinsiyet)){
        echo 'cinsiyet seçiniz';
    }else{   //Tüm bölümler doluysa şartlar yerine gelmişse else bloğuna düşer.
        $sorgu = $db->prepare('INSERT INTO kullanicilar SET 
         ad = ?,
         soyad = ?,
         cinsiyet = ?,
         email = ?,
         telefon_no = ?,
         il = ?,
         spor = ?,
         hobi_resim_yapma = ?,
         hobi_kitap_okuma = ?,
         hobi_muzik_dinleme = ?,                
         hobi_yuruyus_yapma = ?                '
        );  // sorgu değişkenine db(database, veritabanından) veri ekliyorum burda soru işareti hangi verinin gelceği bilinmez


        $ekle = $sorgu->execute([ // execute sorguyu ve kendini çalıştırır/ sorguyu kontrol edebilmek için ise ekle değişkenine atıp verileri yazarız
            $ad,
            $soyad,
            $cinsiyet,
            $email,
            $telefon_no,
            $il,
            $spor,
            $hobi_resim_yapma,
            $hobi_kitap_okuma,
            $hobi_muzik_dinleme,
            $hobi_yuruyus_yapma

        ]);//$ad,$soyad vs veri tabanındaki verilerin değişken hali

        if ($ekle){// ekle çalışıyorsa
            header('Location:kullanici-listesi.php');// yönlendir
        }else{// değilse
            echo 'MySQL Hatası'. $sorgu->errorInfo();//sorgu değişkeni error versn
        }

    }
}
?>
<div class="container"> <?php // ?>
    <div class="alert alert-info" role="alert">
        Kullanıcı Ekle
    </div>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">AD:</label>
            <input type="text" name="ad" class="form-control" id="exampleFormControlInput1" placeholder="AD">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">SOYAD:</label>
            <input type="text" name="soyad" class="form-control" id="exampleFormControlInput1" placeholder="SOYAD">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-MAİL:</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="E-MAİL">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">TELEFON NO:</label>
            <input type="tel" name="telefon_no" class="form-control" id="exampleFormControlInput1" placeholder="TELEFON NO">
        </div>
        <div class="mb-3">
            <select class="form-select" name="il" id="il" aria-label="Default select example">
                <option value="">İL</option>
                <?php foreach ($ilArray as $ilKey=>$ilValue):?>
                    <option value="<?php echo $ilKey; ?>"><?php echo $ilValue ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" name="spor" id="spor" aria-label="Default select example">
                <option value="">SPOR</option>
                <?php foreach ($sporArray as $sporKey=>$sporValue):?>
                    <option value="<?php echo $sporKey; ?>"><?php echo $sporValue ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <div class="alert alert-info" role="alert">
               CİNSİYET
            </div>
            <?php foreach ($cinsiyetArray as $cinsiyetKey=>$cinsiyetValue):?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cinsiyet" value="<?php echo $cinsiyetKey ?>" id="id_cinsiyet_<?php echo $cinsiyetKey;?>">
                    <label class="form-check-label" for="id_cinsiyet_<?php echo $cinsiyetKey;?>">
                        <?php echo $cinsiyetValue; ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="mb-3">
            <div class="alert alert-info" role="alert">
                HOBİLER
            </div>
            <?php foreach ($hobiArray as $hobiKey=>$hobiValue): ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="hobi_<?php echo $hobiKey; ?>" value="<?php echo $hobiKey;?>"  id="id_hobi_<?php echo $hobiKey;?>" >
                <label class="form-check-label" for="id_hobi_<?php echo $hobiKey;?>">
                    <?php echo $hobiValue; ?>
                </label>
            </div>
            <?php endforeach;?>
        </div>

        <div class="mb-3">
            <button type="submit" name="submit" value="1" class="btn btn-info">Gönder</button>
        </div>
    </form>
</div>
<?php
require_once "footer.php";
?>
