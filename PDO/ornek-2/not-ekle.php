<?php
require_once "baglanti.php";
require_once "header.php";

if(isset($_POST['submit'])){

    $ad = $_POST['ad'] ?? null;
    $not1 = $_POST['not1'] ?? null;
    $not2 = $_POST['not2'] ?? null;



    if (empty($ad)){
        echo 'ad giriniz';
    }elseif (empty($not1))
        echo '1. notu giriniz';
    elseif (empty($not2))
        echo'2. notu giriniz';
    else{
        $ortalamaSonuc = $not1 + $not2;
        $ortalama = $ortalamaSonuc/2;
        $sorgu = $db->prepare('INSERT INTO ogrenci_ortalama SET
         ad = ?,
         not1 = ?,
         not2 = ?,
         ortalama = ?                    
         ');
        $ekle = $sorgu->execute([
            $ad,
            $not1,
            $not2,
            $ortalama
        ]);

        if ($ekle){
            header('Location:ogrenci-listesi.php');
        }else{
            echo 'MySQL Hatası'. $sorgu->errorInfo();
        }

    }
}
?>
<div class="container">
    <div class="alert alert-info" role="alert">
        Öğrenciler
    </div>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">AD:</label>
            <input type="text" name="ad" class="form-control" id="exampleFormControlInput1" placeholder="AD">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NOT1:</label>
            <input type="number" name="not1" class="form-control" id="exampleFormControlInput1" placeholder="NOT1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NOT2-:</label>
            <input type="number" name="not2" class="form-control" id="exampleFormControlInput1" placeholder="NOT2">
        </div>
        <div class="mb-3">
            <button type="submit" name="submit" value="1" class="btn btn-info">Gönder</button>
        </div>
    </form>
</div>
<?php
require_once "footer.php";
?>
