<?php
$ad= $_POST["ad"] ?? null;
$soyad = $_POST["soyad"] ?? null;
$telefon = $_POST["telefon"] ?? null;
$email = $_POST["email"] ?? null;
$il = $_POST["il"] ?? null;
$ilce = $_POST["ilce"] ?? null;



print_r($_POST);

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




<form action="" method="POST"
      <form>
          Adres Bilgileri:
          <hr>
          <div>
              <label>
              Ad*
              <input type="text" placeholder="Ad" name="ad"
              </label>
              <label>
              Soyad*
              <input type="text" placeholder="Soyad" name="soyad"
              </label>
          </div>
          <div>
              <br>
              <label>
              Telefon*
                  <input type="tel" placeholder="Telefon no giriniz" name="telefon" >
              </label>
              <label>
                  E mail*
                  <input type="email" placeholder="E mail" name="email">
              </label>
              <br>
              <div>
                  <label>
                      <br>
                  ADRES*<hr>
                  İl*<br>
                  <select name="il[]" multiple size="1">
                      <option>--İL--</option>
                      <option value="corum">ÇORUM</option>
                      <option value="ankara">ANKARA</option>
                      <option value="antalya">ANTALYA</option>
                      <option value="istanbul">İSTANBUL</option>
                      <br>
                  </select>

              </div>
              <div>

                  İlçe*<br>
                  <select name="ilce[]" multiple size="1">
                      <option>--İLÇE--</option>
                      <option value="merkez">MERKEZ</option>
                      <option value="cankaya">ÇANKAYA</option>
                      <option value="yenimahalle">YENİMAHALLE</option>
                      <option value="elmadag">ELMADAĞ</option>
                      <br>
                      </label>
                  </select>
              </div>
              <div>

                  Mahalle*<br>
                  <select name="mahalle[]" multiple size="1">
                      <option>--MAHALLE--</option>
                      <option value="kale">KALE</option>
                      <option value="bahcelievler">BAHÇELİEVLER</option>
                      <option value="demetgül">DEMETGÜL</option>
                      <option value="demirkapi">DEMİRKAPI</option>
                  </select>
              </div>
              <div>
                  AÇIK ADRES*
                  <br>
                  <textarea name="acik-adres" placeholder="Açık Adres Giriniz" cols="20" rows="10"></textarea>

          <hr>
          <form>
            <div>
                KART BİLGİLERİ<br>
                Kart Numarası<br>
                <input type="number" name="kart-numarasi"><br>
                Son Kullanma Tarihi*<br>
                <input type="month" name="ay">
                CVV*
                <input type="number" name="cvv">
                <br>
            </div>

              <button type="submit">KAYDET</button>


              </div>

            </div>











          </form>
      </html>