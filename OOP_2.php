<?php

class produk {

    public  $tipe = "tipe",
            $merk = "merk",
            $harga = 0 ;

    public function getLine() {
        return "$this->tipe, $this->merk";
    }

    public function hitungDiskom(){
        return $this->harga * $this->diskon / 100 ;
    }
}

$produk_1 = new produk();
$produk_1->tipe = "Minuman";
$produk_1->merk = "Teh Pucuk Harum";
$produk_1->harga = "Rp.3500,00";

var_dump($produk_1);

$produk_2 = new produk();
$produk_2->tipe = "Elektronik";
$produk_2->merk = "Samsung";
$produk_2->jenis = "TV";
$produk_2->harga = 1000000;
$produk_2->diskon = 10;

var_dump($produk_2);


echo $produk_1->getLine();


?>