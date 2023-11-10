<?php

require_once 'app/init.php';

 $anime_1 = new anime("Violet evergarden","Drama",12);
 $manga_1 = new manga("One Punch Man","Comedy",200);
 $anime_2 = new anime("Koe no Katachi","Drana",12);
 $figure_1 = new actionFigure("Kuriama Mirai","Kyoukai no Kanata","100000");
//  var_dump($anime_1);
//  var_dump($manga_1);
//  var_dump($anime_2);

$cetakProduk = new infoProduk();
$cetakProduk->tambahProduk($anime_1);
$cetakProduk->tambahProduk($anime_2);
$cetakProduk->tambahProduk($manga_1);
$figure_1->setDiskon(40);   
$cetakProduk->tambahProduk($figure_1);
echo $cetakProduk->info();
