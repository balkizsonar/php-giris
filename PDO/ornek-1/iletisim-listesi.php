<?php
/**
 * Author: Ozan SONAR
 * Mail : ozansonar1@gmail.com
 * User: User
 * Date: 27.02.2023
 * Time: 11:34
 */
require_once "baglan.php";
require_once "ortak-degiskenler.php";
require_once "heeader.php";

$iletisim = $db->query('SELECT * FROM iletisim')->fetchAll(PDO::FETCH_ASSOC);

?>
<div class="container">
    <h2>İletişim Listesi</h2>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ad</th>
            <th scope="col">Soyad</th>
            <th scope="col">Email</th>
            <th scope="col">Telefon</th>
            <th scope="col">Hakkımda</th>


        </tr>
        </thead>
        <tbody>
        <?php foreach($iletisim as $ileti): ?>
            <tr>
                <th class="text-danger"><?php echo $ileti['id']; ?></th>
                <th><?php echo $ileti['ad']; ?></th>
                <th><?php echo $ileti['soyad']; ?></th>
                <th><?php echo $ileti['email']; ?></th>
                <th><?php echo $ileti['telefon_no']; ?></th>
                <th><?php echo $ileti['hakkimda']; ?></th>
                <td>
                <a href="iletisim-detay.php?id=<?php echo $ileti["id"]; ?>" class="btn btn-primary">Detay</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php
require_once "footer.php";
?>

