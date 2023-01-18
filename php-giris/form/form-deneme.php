<?php
echo $_POST["ad"];
echo "<br>";
echo $_POST["soyisim"];
echo "<br>";
echo $_POST["email"];
echo "<br>";


//print_r($_POST);

if(isset($_POST["ad"]))
     echo"POST VAR";
else
    echo"post yok";
if(empty ($_POST["ad"]))
    echo "boş";
else
    echo"ozan";







?>





<form action="" method="POST"><form>
    <div>
        Adınız:

        <input type="text" placeholder="Adınızı giriniz" name="ad">

    </div>
        <br>
    <div>
        Soyadınız:
        <input type="text" placeholder="Soyadınızı giriniz"name="soyisim">
    </div>

    <hr>
<form>
    <div>

    <input type="radio" name="cinsiyet" checked="" value="Erkek">Erkek<!--checked seçili gelmesini sağlar.-->
    <input type="radio" name="cinsiyet" value="Kadın">Kadın
<!-- type="radio" da name= birbiriyle farklı ise birden çok seçeneği seçebiliriz
eğer name="cinsiyet" örneğindeki gibi aynı ise birini sadece seçebiriz ekek ya
da kadın gibi(ikisini aynı anda seçemeyiz).-->
        <hr>

   <div>
       E mail:
       <input type="email" placeholder="E-mail Giriniz"   name="email">

   </div>
        <hr>
   <div>
       Telefon No:
       <input type="tel" placeholder="Telefon No Giriniz" name="telefon-no"


   </div>
    </div>


    <div>
    <input type="submit" name="Gönder">
    </div>

</form>
