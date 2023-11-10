<?php

//ada dua cara 
//1 [define tidak bisa ditererapkan pada class]
// define("NAMA","DIPO");
// echo NAMA;

//2[bisa di terapkan pada class]
// const NAMA = "DIPO";
// echo NAMA;

class coba {
    const COBA = "constantsa";
}
$a = new coba();
echo coba::COBA;


//magic method constanta
// 1. __FILE__[digunakan untuk mengetahui lokasi file]
// 2.__LINE__[digunakan untuk mengetahui lokasi line]
// 3.__FUNCTION__[digunakan untuk mengetahui lokasi function]
// 4.__DIR__
// 5.__CLASS__
// 6.__METHOD__
// 7.__NAMESPACE__
// 8.__TRAIT__
?>