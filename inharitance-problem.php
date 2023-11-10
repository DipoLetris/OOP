<?php

 class produk {

    public $tipe,$judul,$genre,$eps,$chapter;

    public function getLabel(){
        return "{$this->judul}, {$this->genre}";
    }

    public function __construct($tipe="tipe", $judul = "judul", $genre = "genre", $eps = 0,$chapter = 0){
        $this->tipe = $tipe;
        $this->judul = $judul;
        $this->genre = $genre;
        $this->eps = $eps;
        $this->chapter = $chapter;
    }

    //  Anime: Violet evergarden, Drama, 12 eps
    //  Manga: One Punch Man, Comedy, 200 chapter

    public function InfoLengkap(){
        $str = "{$this->tipe}: {$this->getLabel()}, ";

        if( $this->eps == 0 ){
            $str .= "{$this->chapter} chapter";

        } else if ( $this->chapter == 0){
            $str .= "{$this->eps} episode";
        }

        return $str;
    }

 }

 class infoProduk{
    public function info( produk $produk ){
        $str = "{$produk->tipe}: {$produk->getLabel()}";
        return $str;
    }
 }

 $anime_1 = new produk("Anime","Violet evergarden","Drama",12,0);
 $manga_1 = new produk("Manga","One Punch Man","Comedy",0,200);
 var_dump($anime_1);
 var_dump($manga_1);

 $infoAnime_1 = new infoProduk();
 echo $infoAnime_1->info($anime_1);
 echo "<br/>";
 $infoManga_1 = new infoProduk();
 echo $infoManga_1->info($manga_1);
 echo "<br/>";
 echo "================================= <br/>";

 echo $anime_1->InfoLengkap();
 echo "<br/>";
 echo $manga_1->InfoLengkap();

?>