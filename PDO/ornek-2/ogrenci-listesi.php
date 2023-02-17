<?php
require_once 'baglanti.php';
require_once "header.php";



$ogrenci_ortalama = $db->query('SELECT * FROM ogrenci_ortalama')->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <h2>Öğrenciler</h2>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ad</th>
            <th scope="col">not1</th>
            <th scope="col">not2</th>
            <th scope="col">ortalama</th>
            <th scope="col"></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach($ogrenci_ortalama as $ogrenci): ?>
            <tr>
                <th class="text-danger"><?php echo $ogrenci['id']; ?></th>
                <th><?php echo $ogrenci['ad']; ?></th>
                <th><?php echo $ogrenci['not1']; ?></th>
                <th><?php echo $ogrenci['not2']; ?></th>
                <th><?php echo $ogrenci['ortalama']; ?></th>

                <td>
                    <a href="ogrenci-duzenle.php?id=<?php echo $ogrenci["id"]; ?>" class="btn btn-primary">Düzenle</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>















<?php
require_once 'footer.php';

?>
