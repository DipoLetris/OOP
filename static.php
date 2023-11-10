<?php

 class cobaStatic {

    public static $angka = 1;

    public function halo(){
        return "halo " . self::$angka++ . " kali. <br>";
    }

 }

 $obj = new cobaStatic();
 echo $obj->halo();
 echo $obj->halo();
 echo $obj->halo();

    echo "<hr>";
    
 $obj1 = new cobaStatic();
 echo $obj1->halo();
 echo $obj1->halo();
 echo $obj1->halo();


?>