<?php
    
    $ad = "Tayfun";
    $soyad = "Erbilen";
    $meslek = "Geliştirici";
    $yas = 24;

    /*

    Dizi Tanımlama
        1- array()
        2- []

    */


    $kimlik = array( 
        'ad'=>"Tayfun",
       'soyad' => "Erbilen",
       'meslek'=> "Geliştirici",
        'yas'=> 24
    );
     $kimlik2 =[
        'ad'=>"Tayfun",
        'soyad' => "Erbilen",
        'meslek'=> "Geliştirici",
        'yas'=> 24

     ];     

/*
Dizi İçindeki Elemanlara Erişmek
      - print_r()
*/

   //echo $kimlik['meslek'];

   //print_r($kimlik2);


/*
    Siteler
        E-ticaret
             Sahibinden
             N11
             Hepsiburada
             Gittigidiyor
    
        Egitim
            Udemy
            Prototürk
            93academy
*/

  $kategoriler = [
         'siteler'=>[
            'e-ticaret'=>[
                'sahibinden',
                'n11',
                'hepsiburada',
                'gittigidiyor'
                
            ], 

            'egitim'=>[
                'udemy',
                'prototürk',
                '93academy'


                
            ],
            ]

   ];

   //echo $kategoriler['siteler']['e-ticaret'][2];
    //print_r($kategoriler);

    define('UYE', [
        'ad'=> 'Tayfun',
        'soyad'=> 'Erbilen',
        'meslek'=>'Geliştirici',
        'yas'=> 24,
        'sporlar'=>[
            'jet kune do',
            'bisiklet sürmek'
        ]

    ]);
    echo UYE['sporlar'][1];





?>