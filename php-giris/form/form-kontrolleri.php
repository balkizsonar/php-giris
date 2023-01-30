
<?php
if(isset($_POST) && isset($_POST["kaydet"])){
   //
    // echo "<pre>";print_r($_POST);"</pre>";exit;
$cinsiyetArray = [
    1 => "Erkek",
    2 => "kadın",
];



    $isim = $_POST["isim"] ?? null;
    $soyisim = $_POST["soyisim"] ?? null;
    $cinsiyet = $_POST["cinsiyet"] ?? null;
    $email = $_POST["email"] ?? null;
    $telefon_no = $_POST["telefon_no"] ?? null;






 if (empty ($_POST["isim"])){
     echo "isim girilmeli";
 }elseif (empty($_POST["soyisim"])){
     echo "soyisim girilmeli";
 }elseif (empty ($_POST["cinsiyet"])){
     echo "cinsiyet seçilmeli";
 }elseif (empty($_POST["email"])){
     echo "email girilmeli";
 }elseif (empty($_POST["telefon_no"])){
     echo "telefon no girilemeli";
 }else{
     $mesaj = "Cinsiyet:".($cinsiyet == 1 ? "Erkek":"kadın")."<br>";


    echo $isim.$soyisim.$cinsiyet.$email. $telefon_no;


 }



}
?>



<body>
<form action="" method="post">
    Kişisel Bilgiler<hr>
    <div>
        İsim:
        <input type="text" name="isim">

        Soyisim:
        <input type="text" name="soyisim">
       <br>
        <br>
        Cinsiyet:<br>
        Erkek:
        <input type="radio" name="cinsiyet" value="1">
        Kadın:
        <input type="radio" name="cinsiyet" value="2"><br>
        <br>
        Email:
        <input type="email" name="email">

        Telefon No:
        <input type="tel" name="telefon_no"><br>
        <button type="submit" name="kaydet">Kaydet</button>



    </div>




</form>
</body>