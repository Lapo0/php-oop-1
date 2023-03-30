<?php

// CREO CLASSE MOVIE
class Movie {

    public string $titol;
    public string $description;
    public string $actor;
    public int $star;

    // creare il costruttore
    function __construct($_titol, $_star) {

        $this->titol = $_titol;
        $this->star = $_star;
    }
}

// ISTANZIO LA CLASSE MOVIE
$film1 = new Movie("Bitcoin", 5);

var_dump($film1);

$film2 = new Movie("Bernard Madoff", 0);

var_dump($film2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <p>
                    
                </p>
            </div>
        </div>
    </div>
    
</body>
</html>