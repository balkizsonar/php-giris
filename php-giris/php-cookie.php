<?php

    // setcookie()
    // $_COOKIE

    setcookie('site', 'udemy', time() + (86400)*30);//(86400)*30)BU COOKİE NİN SÜRESİ1 gün çarpı 30
    setcookie('site','test',time()-86400 );//silmek için oluşturduğumuzun tama tersi değerinde oluştururuz ve silinir


   // print_r($_COOKIE);
    ?>