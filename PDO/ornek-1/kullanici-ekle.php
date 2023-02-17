<?php
require_once "baglan.php";
require_once "ortak-degiskenler.php";
require_once "heeader.php";

if(isset($_POST['submit'])){
    $ad = $_POST['ad'] ?? null;
    $soyad = $_POST['soyad'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefon_no = $_POST['telefon_no'] ?? null;
    $il = $_POST['il'] ?? null;


    if (empty($ad)){
        echo 'ad giriniz';
    }elseif (empty($soyad))
        echo 'soyad giriniz';
    elseif (empty($email))
        echo'email giriniz';
    elseif (empty($telefon_no))
        echo 'telefon no giriniz';
    elseif(empty($il)){
        echo 'il seçiniz';
    }else{
        $sorgu = $db->prepare('INSERT INTO kullanicilar SET
         ad = ?,
         soyad = ?,
         email = ?,
         telefon_no = ?,
         il = ?                '
        );
        $ekle = $sorgu->execute([
            $ad,
            $soyad,
            $email,
            $telefon_no,
            $il
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
            <button type="submit" name="submit" value="1" class="btn btn-info">Gönder</button>
        </div>
    </form>
</div>
<?php
require_once "footer.php";
?>
