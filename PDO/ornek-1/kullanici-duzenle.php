<?php
require_once "baglan.php";
require_once "ortak-degiskenler.php";
require_once "heeader.php";






if(!isset($_GET["id"])){
    header("Location: index.php");//header yönlendirme demek
}
$id = intval($_GET["id"]);
$veriGetir = $db->prepare("SELECT * FROM kullanicilar WHERE id=?");
$veriGetir->execute([
   $id
]);
if($veriGetir->rowCount() !== 1){
    header("Location: kullanici-listesi.php");
}
$veriSonuc = $veriGetir->fetch(PDO::FETCH_ASSOC);//$veriSonuc değişkeninine $veriGetir deki değerleri atıyoruz.

if(isset($_POST['submit'])){

    $ad = $_POST['ad'] ?? null;
    $soyad = $_POST['soyad'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefon_no = $_POST['telefon_no'] ?? null;
    $il = $_POST['il'] ?? null;
    $spor = $_POST['spor'] ?? null;



    if (empty($ad)){
        echo 'ad giriniz';
    }elseif (empty($soyad)){
        echo 'soyad giriniz';
    }elseif (empty($email)){
        echo'email giriniz';
    }elseif (empty($telefon_no)){
        echo 'telefon no giriniz';
    }elseif (empty($il)){
        echo 'il seçiniz';
    }elseif (empty($spor)){
        echo 'spor seçiniz';
    }else{
        $sorgu = $db->prepare('UPDATE kullanicilar SET
         ad = ?,
         soyad = ?,
         email = ?,
         telefon_no = ?,
         il = ?,
         spor = ?
         WHERE id=?
         '
        );
        $ekle = $sorgu->execute([
            $ad,
            $soyad,
            $email,
            $telefon_no,
            $il,
            $spor,
            $id
        ]);

        if ($ekle){
            header('Location:kullanici-listesi.php');
        }else{
            echo 'MySQL Hatası'. $sorgu->errorInfo();
        }

    }
}


?>
<div class="container">
    <div class="alert alert-info" role="alert">
        Kullanıcı Düzenle
    </div>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">AD:</label>
            <input type="text" name="ad" class="form-control" id="exampleFormControlInput1" placeholder="AD" value="<?php echo $veriSonuc["ad"] ?? null; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">SOYAD:</label>
            <input type="text" name="soyad" class="form-control" id="exampleFormControlInput1" placeholder="SOYAD" value="<?php echo $veriSonuc["soyad"] ?? null; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">E-MAİL:</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="E-MAİL" value="<?php echo $veriSonuc["email"] ?? null; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">TELEFON NO:</label>
            <input type="tel" name="telefon_no" class="form-control" id="exampleFormControlInput1" placeholder="TELEFON NO" value="<?php echo $veriSonuc["telefon_no"] ?? null; ?>">
        </div>
        <div class="mb-3">
            <select class="form-select" name="il" id="il"  aria-label="Default select example">
                <option value="">İL</option>
                <?php foreach ($ilArray as $ilKey=>$ilValue):?>
                    <option value="<?php echo $ilKey; ?>" <?php echo $veriSonuc["il"] == $ilKey ? "selected" : null ?>><?php echo $ilValue ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select" name="spor" id="spor"  aria-label="Default select example">
                <option value="">SPOR</option>
                <?php foreach ($sporArray as $sporKey=>$sporValue):?>
                    <option value="<?php echo $sporKey; ?>" <?php echo $veriSonuc["spor"] == $sporKey ? "selected" : null ?>><?php echo $sporValue ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <?php foreach ($cinsiyetArray as $cinsiyetKey=>$cinsiyetValue):?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cinsiyet" value="<?php echo $cinsiyetKey ?>" id="id_cinsiyet_<?php echo $cinsiyetKey;?>" checked>
                    <label class="form-check-label" for="id_cinsiyet_<?php echo $cinsiyetKey;?>">
                        <?php echo $cinsiyetValue; ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" value="1" class="btn btn-info">Gönder</button>
        </div>
    </form>
</div>
<?php
require_once "footer.php";
?>
