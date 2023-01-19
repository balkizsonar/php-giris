

<?php
//echo $_POST["ad"];
//echo "<br>";
//echo $_POST["soyisim"];
//echo "<br>";
echo $_POST["email"];
//echo "<br>";






//print_r($_POST);

if(isset($_POST["ad"])){
    echo $_POST["ad"];
}else{
    echo"";
}

if(empty ($_POST["soyisim"])){
    echo "";
}else{
    echo $_POST["soyisim"];
}
echo"<br>";

if(isset($_POST["cinsiyet"])){
    echo $_POST["cinsiyet"];
}else{
    echo"";
}
if(isset($_POST["hobiler"])){
    echo $_POST;
}else{
    echo"";
}

//print_r($_POST);
?>

<form action="" method="POST"><form>
    <div>
        Adınız:

        <input type="text" placeholder="Adınızı giriniz" name="ad"value="<?php echo $_POST["ad"] ?? null; ?>">

    </div>
    <br>
    <div>
        Soyadınız:
        <input type="text" placeholder="Soyadınızı giriniz"name="soyisim"value="<?php echo $_POST["soyisim"] ?? null; ?>">
    </div>
    <hr>
<form>
    <div>
        <label for="cinsiyet">Cinsiyet:</label>
        <select name="cinsiyet" id="cinsiyet">
            <option value="cinsiyet"  ></option>
            <option value="Erkek" Select >Erkek</option>
            <option value="Kadın" Select>Kadın</option>

        </select>

        <!-- <input type="radio" name="cinsiyet"  value="Erkek">Erkek   ///checked seçili gelmesini sağlar
          <input type="radio" name="cinsiyet" value="Kadın">Kadın
        type="radio" da name= birbiriyle farklı ise birden çok seçeneği seçebiliriz
       eğer name="cinsiyet" örneğindeki gibi aynı ise birini sadece seçebiriz ekek ya
       da kadın gibi(ikisini aynı anda seçemeyiz).-->
        <hr>
    </div>
    <div>

       E mail:
       <input type="email" placeholder="E-mail Giriniz"   name="email" value="<?php echo $_POST["email"] ?? null; ?>"  >

    </div>
        <hr>
    <div>
       Telefon No:
       <input type="tel" placeholder="Telefon No Giriniz"  name="telefon"value="<?php echo $_POST["telefon"] ?? null; ?>">

   </div>
    </div>
    <div>
        <div>
            <hr>
           Hobiler:<br>
            <label>
            <input type="checkbox"  name="hobiler[]" value="<?php echo $_POST["hobiler"] ?? null; ?>" >Kitap Okumak
            </label>
            <br>
            <label>
                <input type="checkbox"  name="hobiler[]" value="<?php echo $_POST["hobiler"] ?? null; ?>" >Televizyon İzlemek
            </label>
            <br>
            <label>
                <input type="checkbox"  name="hobiler[]" value="<?php echo $_POST["hobiler"] ?? null; ?>" >Resim Yapmak
            </label>
            <br>
            <label>
                <input type="checkbox"  name="hobiler" value="<?php echo $_POST["hobiler"] ?? null; ?>" >Müzik Dinlemek
            </label>




        </div>
    <input type="submit" name="Gönder">
    </div>

</form>
