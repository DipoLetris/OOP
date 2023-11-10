<?php
  class infoProduk{

    public $daftarProduk = array();

    public function tambahProduk( produk $produk){
        $this->daftarProduk[] = $produk;
    }

    public function info(){
        $str ="DAFTAR PRODUK : <br>";
        
        foreach($this->daftarProduk as $p){
            $str .= "- {$p->infoLengkap()} <br>";
        }
       
        return $str;
    }

}