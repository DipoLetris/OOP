<?php

 class produk {

    public $judul,$genre,$eps,$chapter;

    public function getLabel(){
        return "{$this->judul}, {$this->genre}";
    }

    public function __construct( $judul = "judul", $genre = "genre", $eps = 0,$chapter = 0){
        $this->judul = $judul;
        $this->genre = $genre;
        $this->eps = $eps;
        $this->chapter = $chapter;
    }

    //  Anime: Violet evergarden, Drama, 12 eps
    //  Manga: One Punch Man, Comedy, 200 chapter

    public function InfoLengkap(){
        $str = "{$this->getLabel()}, ";

    }

}

    class infoProduk{
        public function info( produk $produk ){
            $str = "{$produk->getLabel()}";
            return $str;
        }
    }

    class anime extends produk {
        public function infoLengkap(){
            $str = "Anime: {$this->getLabel()}, {$this->eps} Episode ";
            return $str;
        }
    }

    class manga extends produk {
        public function infoLengkap(){
            $str = "Manga: {$this->getLabel()}, {$this->chapter} Chapter ";
            return $str;
        }
    }


 $anime_1 = new anime("Violet evergarden","Drama",12,0);
 $manga_1 = new manga("One Punch Man","Comedy",0,200);
 var_dump($anime_1);
 var_dump($manga_1);

 $infoAnime_1 = new infoProduk();
 echo $infoAnime_1->info($anime_1);
 echo "<br/>";
 $infoManga_1 = new infoProduk();
 echo $infoManga_1->info($manga_1);
 echo "<br/>";
 echo "================================= <br/>";
//function info lengkap (inharitance anime) {
 echo $anime_1->InfoLengkap();
 echo "<br/>";
 // }
 //funtion info lengkap (Inhaaritance manga){
 echo $manga_1->InfoLengkap();
 echo "<br/>";
 //}
 

?>