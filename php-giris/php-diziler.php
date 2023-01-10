<?php
$ad = "Tayfun";
$soyad ="Erbilen";
$meslek = "Geliştirici";
$yas = 24;

/*
     Dizi Tanımlama
        1- array()
        2- []

*/

$kimlik = array(
    'ad'=>"Tayfun",
    'soyad'=>"Erbilen",
    'meslek'=>"Geliştirici",
    'yas'=>24
);

$kimlik2 = [
    'ad'=>"Tayfun",
    'soyad'=>"Erbilen",
    'meslek'=>"Geliştirici",
    'yas'=>24


];

$sayilar = array (1,2,3);
$sayilar2 = [1,2,3];
    

/*
  Dizi İçindeki Elemanlara Erişmek
        print_r()
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
            Eğitim
               Udemy 
               Prototürk
               93academy


     */
 
     $kategoriler = [ 
        'siteler'=> [
            'e-ticaret' =>[
                'sahibinden',
                'n11',
                'hepsiburada',
                'gittigidiyor'
            ],
            'eğitim' =>[
                'udemy',
                'prototürk',
                '93academy'

            ],
        ]
        
        
 ];
     
        //echo $kategoriler['siteler']['eğitim'][1]; 
       // print_r($kategoriler);

       define('UYE',[
        'ad' => 'Tayfun',
        'soyad' => 'Erbilen',
        'meslek' => 'Geliştirici',
        'yas' => 24,
        'sporlar'=> [
            'jet kune do',
            'bisiklet sürmek'
        ]
    
       ]);

       //print_r (UYE);
    
        echo UYE['sporlar'][1];





?>