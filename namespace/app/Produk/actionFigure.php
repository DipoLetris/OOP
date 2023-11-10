<?php namespace app\Produk;
    class actionFigure extends Produk implements getInfoProduk{

        public $karakter,$anime;

        public function __construct( $karakter =  "karakter",$anime = "anime", $harga = "0"){
            $this->karakter = $karakter;
            $this->anime = $anime;
            $this->harga = $harga;
        }

        public function infoLengkap(){
            $str = "Karakter:  {$this->karakter} , Anime: {$this->anime}, Harga: {$this->getHarga()}";
            return $str;
        }

        public function getInfoLengkap(){
            $str = "{$this->getLabel()}";
            return $str;
        }

    }
