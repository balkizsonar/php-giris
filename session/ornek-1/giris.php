<?php
if(isset($_POST['submit'])){
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];


    if (!$kullanici_adi || !$sifre){
        $hata = 'LÜTFEN KULLANICI ADI YADA ŞİFRENİZİ GİRİNİZ';

    }elseif ($kullanici_adi != $uye['kullanici_adi']){
        $hata = 'Kullanıcı adınız hatalı';
    }elseif ($sifre != $uye['sifre']){
        $hata = 'Şifreniz hatalı';
    }else{


        $_SESSION['zaman'] = time() + 20;//kullanıcı 20 sn işlem yapmazsa session u durudur.
        $_SESSION['kullanici_adi'] = $uye['kullanici_adi'];
        //header le yönlendiriyoruz bu bir yönlendirme fonksiyonu
        header('Location:/php-giris/include-ornek/1/index.php');

    }






}


?>
<?php if (isset($hata)): ?>
<div style="border: 1px solid red">
    <?php echo $hata; ?>
</div>
<?php endif; ?>

<form action="" method="post" >
Kullanıcı adı:<br>
    <input type="text" name="kullanici_adi"><br>
    <hr>
Şifre:<br>
    <input type="password" name="sifre"><br>
    <input type="hidden" name="submit" value="1">
    <button type="submit">Giriş Yap</button>




</form>