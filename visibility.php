<?php

 class produk {

    public $judul;

    protected $diskon;
    
    private $genre;

    public function getLabel(){
        return "{$this->judul}, {$this->genre}";
    }

    public function __construct( $judul = "judul", $genre = "genre"){
        $this->judul = $judul;
        $this->genre = $genre;
    }

    public function infoLengkap(){
        $str = "{$this->getLabel()}";
        return $str;
    }

    public function getGenre(){
        return $this->genre;
    }

}

    class infoProduk{

        public function info( produk $produk ){
            $str = "{$produk->getLabel()}";
            return $str;
        }

    }

    class anime extends produk {

        public $eps;

        public function __construct( $judul= "judul",$genre= "genre",$eps = 0){
            parent::__construct( $judul,$genre);
            $this->eps = $eps;
        }

        public function infoLengkap(){
            $str = "Anime:" . parent::infoLengkap() . ", {$this->eps} Episode ";
            return $str;
        }

    }

    class manga extends produk {

        public $chapter;

        public function __construct( $judul= "judul",$genre= "genre",$chapter = 0){
            parent::__construct( $judul,$genre);
            $this->chapter = $chapter;
        }

        public function infoLengkap(){
            $str = "Manga:" . parent::infoLengkap() .", {$this->chapter} Chapter ";
            return $str;
        }

    }

    class actionFigure extends produk {

        public $karakter,$anime;

        public function __construct( $karakter =  "karakter",$anime = "anime", $harga = "0"){
            $this->karakter = $karakter;
            $this->anime = $anime;
            $this->harga = $harga;
        }

        public function infoLengkap(){
            $str = "Karakter:  {$this->karakter} , Anime: {$this->anime}, Harga: {$this->harga}";
            return $str;
        }

        public function setDiskon( $diskon ){
            $this->diskon = $diskon;
        }

        public function getHarga(){
            return $this->harga - ($this->harga * $this->diskon / 100);
        }

    }


 $anime_1 = new anime("Violet evergarden","Drama",12);
 $manga_1 = new manga("One Punch Man","Comedy",200);
 $anime_2 = new anime("Koe no Katachi","Drana",12);
//  var_dump($anime_1);
//  var_dump($manga_1);
//  var_dump($anime_2);

 echo $anime_1->infoLengkap();
 echo "<br/>";
 echo $manga_1->infoLengkap();
 echo "<br/>";
 echo $anime_2->infoLengkap();
 echo "<hr>";
 echo $anime_1->getGenre();

$figure_1 = new actionFigure("Kuriama Mirai","Kyoukai no Kanata","100000");

$figure_1->setDiskon(50);

echo $figure_1->infoLengkap();
echo "<hr>";

echo $figure_1->getHarga();
?>