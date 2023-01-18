<?php
print_r ($_POST);
if(isset($_POST) && isset($_POST["hesapla"])) {
//echo "<pre>";print_r($_POST);echo "</pre>";exit;
//kullanıcıdan gelen verileri değişkenlerimize aktarıyoruz
    $not1 = (int)$_POST["not1"]; //posttan gelen sayi1 değerini $sayi1 değişkenine atadık.
    $not2 = (int)$_POST["not2"];
    $not3 = (int)$_POST["not3"];

    if (empty($not1)) {
        echo 'Notunuzu Giriniz.';
    } elseif (empty($not2)) {
        echo '2. Notu Giriniz.';
    } elseif (empty($not3)) {
        echo '3.Notu Giriniz.';
    } else {
        $notToplam = $not1 + $not2 + $not3;
        $sonuc = $notToplam / 3;

        if($sonuc >= 60){
            echo "Sınıfı geçtiniz<br>";
        }else{
            echo "Sınıf tekrarı<br>";
        }

        echo "Not ortalaması:" . $sonuc;
    }
}




?>

<h1>
    Not Hesapla
</h1>

<form action="" method="post">
    <div>
        <label for="not 1">not 1</label>
        <input type="number" name="not1" >
    </div>

    <div>
        <label for="">not 2</label>
        <input type="number" name="not2" >
    </div>

    <div>
        not 3
        <input type="number" name="not3" >
    </div>

    <div style="background-color: lightsalmon;padding: 10px;margin-bottom: 10px;">
        <button type="submit" name="hesapla">ORTALAMA HESAPLA</button>
    </div>

</form>



