<?php
require_once "baglan.php";
require_once "heeader.php";
if(!isset($_GET["id"])){
    header("Location: index.php");
}
$id = intval($_GET["id"]);
$veriGetir = $db->prepare("SELECT * FROM kullanicilar WHERE id=?");
$veriGetir->execute([
   $id
]);
if($veriGetir->rowCount() !== 1){
    header("Location: kullanici-listesi.php");
}
$veriSonuc = $veriGetir->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['submit'])){

    $ad = $_POST['ad'] ?? null;
    $soyad = $_POST['soyad'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefon_no = $_POST['telefon_no'] ?? null;


    if (empty($ad)){
        echo 'ad giriniz';
    }elseif (empty($soyad)){
        echo 'soyad giriniz';
    }elseif (empty($email)){
        echo'email giriniz';
    }elseif (empty($telefon_no)){
        echo 'telefon no giriniz';
    }else{
        $sorgu = $db->prepare('UPDATE kullanicilar SET
         ad = ?,
         soyad = ?,
         email = ?,
         telefon_no = ?
         WHERE id=?
         '
        );
        $ekle = $sorgu->execute([
            $ad,
            $soyad,
            $email,
            $telefon_no,
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
            <button type="submit" name="submit" value="1" class="btn btn-info">Gönder</button>
        </div>
    </form>
</div>
<?php
require_once "footer.php";
?>
