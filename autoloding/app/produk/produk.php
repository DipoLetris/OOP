<?php
abstract class produk {
    
    private $judul,$genre,$diskon = 0;

    protected $harga;

    public function __construct( $judul = "judul", $genre = "genre"){
        $this->judul = $judul;
        $this->genre = $genre;
    }


    abstract public function getInfoLengkap();

    public function getLabel(){
        return "{$this->judul}, {$this->genre}";
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getDiskon(){
        return  $this->diskon;
    }
    
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setJudul( $judul ){
        if (!is_string($judul)){
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }

    public function setGenre( $genre ){
        $this->genre = $genre;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }
    

}
