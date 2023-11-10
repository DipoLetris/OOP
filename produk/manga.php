<?php
  class manga extends produk implements getInfoProduk{

    public $chapter;

    public function __construct( $judul= "judul",$genre= "genre",$chapter = 0){
        parent::__construct( $judul,$genre);
        $this->chapter = $chapter;
    }

    public function infoLengkap(){
        $str = "Manga:" . $this->getInfoLengkap() .", {$this->chapter} Chapter ";
        return $str;
    }

    public function getInfoLengkap(){
        $str = "{$this->getLabel()}";
        return $str;
    }

}