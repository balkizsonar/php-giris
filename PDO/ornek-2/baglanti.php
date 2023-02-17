<?php
ob_start();
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



try{ //hatamız varsa daha iyi görünür
$db = new PDO('mysql:host=localhost;dbname=WEB_dersler', 'root','');
}catch (PDOException $e){
    echo $e->getMessage();
    exit;
}
?>
