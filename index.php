<?php
class Movie {
    // variabili 
    public $titolo;
    public $direttore;
    public $anno;
    public $genere;

    // costruttore
    public function __construct($titolo, $direttore, $anno, $genere) {
        $this->titolo = $titolo;
        $this->direttore = $direttore;
        $this->anno = $anno;
        $this->genere = $genere;
    }

    //metodo
    public function getDescription() {
        return "Titolo: $this->titolo, Directed by: $this->direttore, Year: $this->anno, Genere: $this->genere";
    }
}

// oggetti movie
$movie1 = new Movie("Inception", "Christopher Nolan", 2010, "Science Fiction");
$movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972, "Crime");

echo "<h1>Movie Details</h1>";
echo "<p>" . $movie1->getDescription() . "</p>";
echo "<p>" . $movie2->getDescription() . "</p>";
?>