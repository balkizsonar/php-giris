<?php

/*
if (isset($_POST)){  //isset bir değişkenin varlığını kontrol eder.
    $ad = $_POST["ad"];
    $meslek = $_POST["meslek"][0];
    $cinsiyet = $_POST["cinsiyet"];
    $hakkımda = $_POST
    echo "Merhaba ".$ad."  cinsiyetin ".$cinsiyet."  mesleğiniz ".$meslek;
}
*/

// $_POST  //Bir dizinin içeriğini postla görebiliyoruz
//birden fazla seçim yapıldığında "meslek[]" gibi yanına köşeli parantez koyarız ve sonucu dizi olarak gelir.

//print_r($_POST);
//echo $_POST ['ad'];


//strip_tags() //savunmamız için filtreleme yaparız bununla
//htmlspecialchars()// html etiketi kaldırmaz ma zararsız ko dhaline döndürür.
//trim()

/*if(trim($_POST['hakkimda'])==''){
    echo 'lütfen hakkinizda bir şeyler yazın.';
}else{
    print_r($_POST);
}
*/


/*if(!$_POST['hakkimda']){  // !boşsa anlamında kullanılıyor

}
*/

function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele', $post):htmlspecialchars(trim($post));
}

$_POST = array_map('form_filtrele', $_POST);


function post($name)
{
    if(isset($_POST[$name]))
        return $_POST[$name];
}

echo post ('hakkimda');




















?>