<?php

class produk {

    public  $tipe, 
            $merk,
            $harga;

    public function __construct($tipe, $merk, $harga){
        $this->tipe = $tipe;
        $this->merk = $merk; 
        $this->harga = $harga;
    }

}

$produk_1 = new produk("Minuman","Teh Pucuk","3000");
$produk_2 = new produk("Makanan","Aoka","2000");


var_dump($produk_1);
var_dump($produk_2);


?>