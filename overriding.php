<?php

 class produk {

    public $judul,$genre;

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


 $anime_1 = new anime("Violet evergarden","Drama",12);
 $manga_1 = new manga("One Punch Man","Comedy",200);
 $anime_2 = new anime("Koe no Katachi","Drana",12);
 var_dump($anime_1);
 var_dump($manga_1);
 var_dump($anime_2);

 echo $anime_1->infoLengkap();
 echo "<br/>";
 echo $manga_1->infoLengkap();
 echo "<br/>";
 echo $anime_2->infoLengkap();

?>