<form action="gonder.php" method="post" enctype="multipart/form-data">
    <!--gonder.php adresine gönderilsin, post methoduyla gönderilsin diyoruz burada

-->
<!--
    input
    textarea
    file
    select
    radio
    checkbox
    multiple select
    button
-->
    Ad: <br>
    <input type="text"   value="tayfun erbilen" name="ad">
    <hr>
    Hakkımda: <br>
    <textarea  name="hakkimda" cols="50" placeholder ="hakkında bir şeyler yaz.." rows="5"></textarea>
    <hr>
    Meslek: <br>
    <select name="meslek_select">
        <option>--seç--</option>
        <option value="web-developer">Web Developer</option>
        <option value="front-end-developer">Front-end Developer</option>
        <option selected value="back-end-developer">Back-end Developer</option>
    </select>
    <hr>
    Cinsiyet: <br>
    <label>
        <input type="radio" checked name="cinsiyet" value="erkek">
        erkek
        </label>
        <label>
            <input type="radio" name="cinsiyet" value="kadın">
            kadın
        </label>
    <hr>
    İlgi Alanları: <br>
    <label>
        <input type="checkbox" checked name="ilgi-alani[]" value="php"> PHP
    </label>
    <label>
        <input type="checkbox" checked name="ilgi-alani[]" value="html">HTML
    </label>
    <label>
        <input type="checkbox" name="ilgi-alani[]" value="css">CSS
    </label>

    <hr>
    Fotoğraf: <br>
    <input type="file" name="fotoğraf">
    <hr>


    Meslek: <br>
    <select name="meslek[]" multiple size="5">
        <option>--seç--</option>
        <option selected value="web-developer">Web Developer</option>
        <option value="front-end-developer">Front-end Developer</option>
        <option selected value="back-end-developer">Back-end Developer</option>

        <hr>

    <button type="submit">Gönder</button>
     <input type = "submit" value="Gönder">



<!--<input type="text"disabled name="ad">!! disabled okuruz ama işlem
yapamayız

 <textarea  name="hakkimda" cols="50" rows="5">hakkımda</textarea>
 <textarea  name="hakkimda" cols="50" placeholder="hakkanda bir şeyler yaz" rows="5">hakkımda</textarea>
 -->











</form>