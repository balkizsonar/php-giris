<?php

   // session_start();//oturumun başlaması için mutlaka sayfanın başına session_start(); fonksiyonu sayfanın
//en başına yazmamız grekiyor ama include ile sayfayı ayırdığımızda ana sayfanın başına yazmamız yeterli





    session_start();//başlattık oturumumuzu başlatmazsak hata alırız

    $_SESSION['kullanici_adi'] = 'tayfun';//ister değer ata ister atama sessionu başlattıktan sonra echo ile veriyi alırız
    $_SESSION['parola'] = 'tayfun';

    //unset($_SESSION['parola']);//session içindeki bir öğeyi kaldırmak için kullanılır unset parola artık ekranda görünmez bunu yaparsak

    print_r($_SESSION);

    //echo $_SESSION['kullanici_adi'];//tek değer atamada echo kullan yukarıdaki gibi iki atama varsa ve daha fazla print_r() ile bak

    session_destroy();//oturumu böyle bitiriyoruz kullanıcı çıkış yaptığında session destroyla bütün sessionları yok ediyoruz.




?>