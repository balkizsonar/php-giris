<?php
require_once "baglan.php";
require_once "ortak-degiskenler.php";


//select*from TABLO_ADİ
//query
//prepare-execute//ekrana yazdırmak için kullnılan bir diğer yöntem
//-fetch() -fetchAll() //doğrudan ekrana yazdırmak için iki metod var,fetch() tek veri çeker, fetchAll() tüm verileri çeker.

$kullanicilar = $db->query('SELECT * FROM kullanicilar')->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>";print_r($kullanicilar);echo "</pre>";
/*
$sorgu = $db->prepare('SELECT * FROM kullanicilar WHERE id = ?');//tek veri çekmek için WHERE YAZIP ÇEKMEK İSTEDİĞİMİZ VERİYİ YAZAR execute dizisinin içine değerini ekleriz.
$sorgu->execute([
    1
]);
$kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
*/
//echo "<pre>";print_r($kullanicilar);echo "</pre>";
//print_r($kullanicilar);
require_once "heeader.php";
?>
<div class="container">
    <h2>Kullanıcılar</h2>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ad</th>
            <th scope="col">Soyad</th>
            <th scope="col">Cinsiyet</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">Spor</th>
            <th scope="col">İl</th>
            <th scope="col">Hobi 1</th>
            <th scope="col">Hobi 2</th>
            <th scope="col">Hobi 3</th>
            <th scope="col">Hobi 4</th>
            <th scope="col">İşlem</th>


        </tr>
        </thead>
        <tbody>
        <?php foreach($kullanicilar as $kullanici): ?>
            <tr>
                <th class="text-danger"><?php echo $kullanici['id']; ?></th>
                <th><?php echo $kullanici['ad']; ?></th>
                <th><?php echo $kullanici['soyad']; ?></th>
                <th><?php echo $kullanici['cinsiyet']; ?></th>
                <th><?php echo $kullanici['email']; ?></th>
                <th><?php echo $kullanici['telefon_no']; ?></th>
                <th><?php echo $kullanici['spor']; ?></th>
                <th><?php echo $ilArray[$kullanici['il']]; ?></th>
                <th><?php echo !empty($kullanici['hobi_resim_yapma']) ? $hobiArray["resim_yapma"]:null; ?></th>
                <th><?php echo !empty($kullanici['hobi_kitap_okuma']) ? $hobiArray["kitap_okuma"]:null; ?></th>
                <th><?php echo !empty($kullanici['hobi_muzik_dinleme']) ? $hobiArray["muzik_dinleme"]:null; ?></th>
                <th><?php echo !empty($kullanici['hobi_yuruyus_yapma']) ? $hobiArray["yuruyus_yapma"]:null; ?></th>
                <td>
                    <a href="kullanici-duzenle.php? id=<?php echo $kullanici["id"]; ?>" class="btn btn-primary">Düzenle</a>
                    <a href="kullanici-sil.php? id=<?php echo $kullanici["id"]; ?>" class="btn btn-danger">Sil</a>
                </td>
            </tr> 
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
require_once "footer.php";
?>
