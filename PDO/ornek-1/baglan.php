<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);



try{
$db = new PDO('mysql:host=localhost;dbname=WEB_dersler', 'root',''); //+db database in kısaltması PDO ise bir sınıf
//mysql veri tabanınmıza bağlanmak istiyoruz burda
}catch (PDOException $e){
   echo $e->getMessage();
   exit;
}

/*
$servername = "localhost";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$servername;dbname=web_meslek", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
*/










?>