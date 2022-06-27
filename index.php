<?php

class Movie
{
    private $title;
    private $image;
    private $year;
    private $genre;

    public function __construct($title, $image, $year, ...$genre)
    {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setYear($year);
        $this->setGenre($genre);
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getGenre()
    {
        return implode(" - ", $this->genre);
    }

    public function getImage()
    {
        return $this->image;
    }
}

$movies = [
    new Movie("Matrix", "https://upload.wikimedia.org/wikipedia/it/thumb/b/bc/Matrix1999_movie.png/390px-Matrix1999_movie.png", 1999, "fantascienza", "azione"),
    new Movie("Snowden", "https://upload.wikimedia.org/wikipedia/it/thumb/5/56/Snowden_film.jpg/390px-Snowden_film.jpg", 2016, "drammatico", "thriller", "biografico"),
    new Movie("Mr. robot", "https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/MrRobot_intertitle.png/390px-MrRobot_intertitle.png", 2015, "drammatico", "thriller")
]



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container">
        <ul>
            <?php foreach ($movies as $movie) {  ?>
                <li>
                    <img src="<?= $movie->getImage() ?>" alt="">
                    <h2>Titolo: <?= $movie->getTitle() ?></h2>
                    <h3>Genere: <?= $movie->getGenre() ?></h3>
                    <h4>Uscita: <?= $movie->getYear() ?></h4>
                </li>
            <?php } ?>
        </ul>
    </div>

</body>

</html>