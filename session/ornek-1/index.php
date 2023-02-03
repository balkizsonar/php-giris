<?php
session_start();
ob_start();
require 'ayarlar.php';
if(isset($_SESSION['zaman']) && time() > $_SESSION['zaman']){
//if(isset($_SESSION['zaman']) && time() > $_SESSION['zaman']){
    session_destroy();
    header('Location:/ayarlar.php');

}else{
    $_SESSION['zaman'] = time() +20;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_SESSION['kullanici_adi'])){
       include 'admin.php'; //kullanici_adi diye bir sessionum varsa (if issetle varsa diyoruz) oturum açmışım demek
    }else{
        include 'giris.php';
    }



?>

</body>
</html>