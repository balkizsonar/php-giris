<?php

//key=value&key=value  OZANA SOR!!!!!!
//?kelime=tayfun&id=5
//get işleminin formdan gelmesine gerek yoktur.
//arama kısmıda get  kullanılır
//üye kaydında  post kullanılır
//uye-duzenle.php?id=5  //id değeri alıp id:5olanı düzenlerken get kullanılır.



function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele', $post):is_array($post); //OZANA SORULACAK
}

$_GET = array_map('form_filtrele', $_GET);

function get($name)

{
    if (isset($_GET[$name]))
        return $_GET[$name];
}
/*
echo (int) get('id');
if (!is_int((int)get('id'))){
    echo 'ID sadece sayı olmalıdır';
    exit;
}
*/
//echo get('deneme');


?>



<form action="" method="get">
    Arama:
    <input type="text" value="<?php echo get('kelime') ?>" name="kelime">
    <hr>
    <?php


    ?>

    ID:<?php  echo get('id'); ?>





</form>
