<?php

// CREO CLASSE MOVIE
class Movie {

    public string $titol;
    public string $image;
    public string $description;
    public string $actor;
    public int $star;
    public $gener;

    public static $validGeners = ["horror", "finanza", "fantasy", "comedian"];

    // creare il costruttore
    function __construct($_titol, $_star, $_image) {

        $this->titol = $_titol;
        $this->star = $_star;
        $this->image = $_image;
    }
}

// ISTANZIO LA CLASSE MOVIE
$film1 = new Movie("Bitcoin", 5, "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61KOkXxsAML._AC_SY450_.jpg");
$film1->gener = Movie::$validGeners[1];

var_dump($film1);

$film2 = new Movie("Bernard Madoff", 0, "https://www.financialounge.com/wp-content/uploads/2021/04/madoff.jpeg");
$film2->gener = Movie::$validGeners[3];

var_dump($film2);


// creo array di film
$films = [
    $film1,
    $film2,
];


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
        <ul class="list-group row">
            <?php foreach ($films as $film) {?>
                <li  class="list-group-item col-5">
                    <div class="card">
                        <img src="<?php echo $film->image; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $film->titol; ?></h5>
                            <p class="text-end">
                                <?php echo $film->gener ?>
                            </p>
                            <p>
                                <?php echo $film->star ?>
                            </p>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    
</body>
</html>