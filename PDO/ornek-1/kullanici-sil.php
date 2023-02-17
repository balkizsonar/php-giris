<?php
/**
 * Author: Ozan SONAR
 * Mail : ozansonar1@gmail.com
 * User: User
 * Date: 16.02.2023
 * Time: 12:34
 */
require_once "baglan.php";
if(!isset($_GET["id"])){
    header("Location: kullanici-listesi.php");
}
$id = intval($_GET["id"]);

$delete = $db->prepare("DELETE FROM kullanicilar WHERE id=?");
$delete->execute([
    $id
]);
header("Location: kullanici-listesi.php");
