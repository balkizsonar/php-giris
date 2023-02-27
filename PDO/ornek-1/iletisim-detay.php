<?php
/**
 * Author: Ozan SONAR
 * Mail : ozansonar1@gmail.com
 * User: User
 * Date: 27.02.2023
 * Time: 17:18
 */
?>


<?php
require_once "baglan.php";
require_once "heeader.php";

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if(!isset($_GET["id"])){//yoksa $_Get te ıd
    header("Location: iletisim.php");// index.php ye yönlendir ! (header yönlendirme demek)
}
$id = intval($_GET["id"]);
$veriGetir = $db->prepare("SELECT * FROM iletisim WHERE id=?");
$veriGetir->execute([
    $id
]);
if($veriGetir->rowCount() !== 1){
    header("Location: iletisim-listesi.php");
}
$veriSonuc = $veriGetir->fetch(PDO::FETCH_ASSOC);
//echo "<pre>";print_r($veriSonuc);echo "</pre>";exit;


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
                    <label for="ad" class="form-label">ADINIZ:<?php echo $veriSonuc["ad"] ?? null; ?></label>
                    <input type="text" class="form-control" name="ad" id="ad" placeholder="Adınız" value="">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="soyad" class="form-label">SOYADINIZ*</label>
                    <input type="text" class="form-control" name="soyad" id="soyad" placeholder="Soyadınız" value="<?php echo $veriSonuc["soyad"] ?? null; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="email" class="form-label">EMAİL*</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?php echo $veriSonuc["email"] ?? null; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="telefon" class="form-label">TELEFON NO* </label>
                    <input type="number" class="form-control" name="telefon_no" id="telefon" placeholder="Telefon No" value="<?php echo $veriSonuc["telefon_no"] ?? null; ?>">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    HAKKIMDA:<?php echo $veriSonuc["hakkimda"] ?? null; ?>
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

