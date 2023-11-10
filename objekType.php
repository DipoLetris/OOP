<?php

class produk {

    public  $tipe, 
            $merk,
            $harga;

    public function __construct($tipe = "Tipe", $merk = "Merk", $harga = "0"){
        $this->tipe = $tipe;
        $this->merk = $merk; 
        $this->harga = $harga;
    }

}

class cetakInfoProduk{
    public function cetak( produk $produk ){
        $str = "{$produk->tipe} {$produk->merk} (Rp.{$produk->harga})";
        return $str;
    }
}

$produk_1 = new produk("Minuman","Teh Pucuk","3000");
$produk_2 = new produk("Makanan","Aoka","2000");

$cetak_1 = new cetakInfoProduk();
echo $cetak_1->cetak($produk_1);
echo "<br/>";
$cetak_2 = new cetakInfoProduk();
echo $cetak_2->cetak($produk_2);



?>