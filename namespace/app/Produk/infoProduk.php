<?php namespace app\Produk;
  class infoProduk{

    public $daftarProduk = array();

    public function tambahProduk( Produk $produk){
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