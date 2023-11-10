<?php
   class anime extends produk implements getInfoProduk{

    public $eps;

    public function __construct( $judul= "judul",$genre= "genre",$eps = 0){
        parent::__construct( $judul,$genre);
        $this->eps = $eps;
    }

    public function infoLengkap(){
        $str = "Anime:" . $this->getInfoLengkap() . ", {$this->eps} Episode ";
        return $str;
    }

    public function getInfoLengkap(){
        $str = "{$this->getLabel()}";
        return $str;
    }
}