<?php
require_once "baglan.php";
require_once "ortak-degiskenler.php";

//select*from TABLO_ADİ
//query
//prepare-execute//ekrana yazdırmak için kullnılan bir diğer yöntem
//-fetch() -fetchAll() //doğrudan ekrana yazdırmak için iki metod var,fetch() tek veri çeker, fetchAll() tüm verileri çeker.

$kullanicilar = $db->query('SELECT * FROM kullanicilar')->fetchAll(PDO::FETCH_ASSOC);
//print_r($kullanicilar);
/*
$sorgu = $db->prepare('SELECT * FROM kullanicilar WHERE id = ?');//tek veri çekmek için WHERE YAZIP ÇEKMEK İSTEDİĞİMİZ VERİYİ YAZAR execute dizisinin içine değerini ekleriz.
$sorgu->execute([
    1
]);
$kullanicilar = $sorgu->fetchAll(PDO::FETCH_ASSOC);
*/

//print_r($kullanicilar);
require_once "heeader.php";
?>
<div class="container">
    <h2>Kullanıcılar</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ad</th>
            <th scope="col">Soyad</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">İl</th>
            <th scope="col">İşlem</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($kullanicilar as $kullanici): ?>
            <tr>
                <th class="text-danger"><?php echo $kullanici['id']; ?></th>
                <th><?php echo $kullanici['ad']; ?></th>
                <th><?php echo $kullanici['soyad']; ?></th>
                <th><?php echo $kullanici['email']; ?></th>
                <th><?php echo $kullanici['telefon_no']; ?></th>
                <th><?php echo $ilArray[$kullanici['il']]; ?></th>
                <td>
                    <a href="kullanici-duzenle.php?id=<?php echo $kullanici["id"]; ?>" class="btn btn-primary">Düzenle</a>
                    <a href="kullanici-sil.php?id=<?php echo $kullanici["id"]; ?>" class="btn btn-danger">Sil</a>
                </td>
            </tr> 
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
require_once "footer.php";
?>
