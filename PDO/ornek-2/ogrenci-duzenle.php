<?php
require_once 'baglanti.php';
require_once "header.php";

 if (!isset ($_GET['id'])){
     header('Location:index.php');
 }
$id = intval($_GET["id"]);
$veriGetir = $db->prepare("SELECT * FROM ogrenci_ortalama WHERE id=?");
$veriGetir->execute([
    $id
]);
if($veriGetir->rowCount() !== 1){
    header("Location: ogrenci-listesi.php");
}
$veriSonuc = $veriGetir->fetch(PDO::FETCH_ASSOC);
//echo "<pre>";print_r($veriSonuc);echo "</pre>";exit;

if(isset ($_POST['submit'])){

    $ad = $_POST['ad'] ?? null;
    $not1 = $_POST['not1'] ?? null;
    $not2 = $_POST['not2'] ?? null;


    if(empty($ad)){
        echo 'ad giriniz';
    }elseif(empty($not1)){
        echo 'not giriniz';
    }elseif(empty($not2)){
        echo'2. notu giriniz';
    }else {

        $ortalamaSonuc = $not1 + $not2;
        $sonuc = $ortalamaSonuc/2;

        $sorgu = $db->prepare('UPDATE ogrenci_ortalama SET
        ad = ?,
        not1 = ?,
        not2 = ?
        WHERE id = ?');

        $ekle = $sorgu->execute([
                $ad,
                $not1,
                $not2,
                $id
            ]);
            if($ekle){
               header('Location:index.php');
            }else{
                echo 'MySQL Hatası'. $sorgu->errorInfo();
            }
    }
}

?>


<div class="container">
    <div class="alert alert-info" role="alert">
        ÖĞRENCİ:
    </div>
 <form action="" method="post">
     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">AD</label>
         <input type="text" name="ad" class="form-control" id="exampleFormControlInput1" value="<?php echo $veriSonuc["ad"] ?? null; ?>" placeholder="AD">
     </div>
     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">not1</label>
         <input type="number" name="not1" class="form-control" id="exampleFormControlInput1" value="<?php echo $veriSonuc["not1"] ?? null; ?>" placeholder="NOT1">
     </div>
     <div class="mb-3">
         <label for="exampleFormControlInput1" class="form-label">not2</label>
         <input type="number" name="not2" class="form-control" id="exampleFormControlInput1" value="<?php echo $veriSonuc["not2"] ?? null; ?>" placeholder="NOT2">
     </div>
     <div class="mb-3">
         <button type="submit" name="submit" value="1" class="btn btn-info">ORTALAMA</button>
     </div>
 </form>
</div>
<?php
require_once "footer.php";
?>