<?php
require_once "baglan.php";
require_once "heeader.php";

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (isset($_POST['submit'])){
    //echo "<pre>";print_r($_POST);echo "</pre>";

    $ad = $_POST['ad'] ?? null;
    $soyad = $_POST['soyad'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefon_no = $_POST['telefon_no'] ?? null;
    $hakkimda = $_POST['hakkimda'] ?? null;

    if(empty($_POST['ad'])){
        echo "adınızı yazınız";
    }elseif(empty($_POST['soyad'])){
        echo "soyadınızı giriniz";
    }elseif(empty($_POST['email'])){
        echo "email giriniz";
    }elseif (empty($_POST['telefon_no'])){
        echo "telefon no giriniz";
    }elseif (empty($_POST['hakkimda'])){
        echo "hakkınızda bir şeyler yazınız";
    }else {
        $sorgu = $db->prepare('INSERT INTO iletisim SET 
         ad = ?,
         soyad = ?,
         email = ?,
         telefon_no = ?,
          hakkimda = ?'
        );

    }



}
?>
<div class="container">
    <div class="alert alert-primary" role="alert">
        İletişim
    </div>
</div>
<div class="container">
    <form action="" method="post">
        <div class="row my-5">
            <div class="col-6">
                <div class="mb-3">
                    <label for="ad" class="form-label">ADINIZ*</label>
                    <input type="text" class="form-control" name="ad" id="ad" placeholder="Adınız">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="soyad" class="form-label">SOYADINIZ*</label>
                    <input type="text" class="form-control" name="soyad" id="soyad" placeholder="Soyadınız">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="email" class="form-label">EMAİL*</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="telefon" class="form-label">TELEFON NO* </label>
                    <input type="number" class="form-control" name="telefon_no" id="telefon" placeholder="Telefon No">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="hakkimda" class="form-label">HAKKIMDA*</label>
                    <textarea class="form-control" name="hakkimda" id="hakkimda" placeholder="Hakkınızda bir şeyler yazınız..." rows="3"></textarea>
                </div>
            </div>
            <div class="col-12 text-end">
                <button type="submit" name="submit" value="1" class="btn btn-warning">Gönder</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once "footer.php";
?>

