<?php

require_once __DIR__ . "/actors.php";

// CREO CLASSE MOVIE
class Movie {

    public string $titol;
    public string $image;
    public string $description;
    public int $star;
    public $actor;
    public $gener;

    public static $validGeners = ["horror", "finanza", "fantasy", "comedian"];

    // creare il costruttore
    function __construct($_titol, $_star, $_image, Actors $_actor) {

        $this->titol = $_titol;
        $this->star = $_star;
        $this->image = $_image;
        $this->actor = $_actor;
    }
}

?>