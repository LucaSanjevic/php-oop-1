<?php
/*
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie {
   public $titolo;
   public $anno;
   public $genere;
   public $regista;
   public $sceneggiatore;
   public $attore_protagonista;
   public $attrice_protagonista;
   
   function __construct($titolo)
   {
    $this->titolo = $titolo;
   }

   function return_titolo() {
    return $this->titolo;
   }
}

$rhps = new Movie("The Rocky Horror Picture Show");
   $strade = new Movie("Strade Perdute");

$listaFilm = [
    [
        $rhps -> return_titolo(),
        "anno" => "1975",
        "genere" => "musical",
        "regista" => "Jim Sharman",
        "sceneggiatore" => "Richard O'Brien",
        "attore_protagonista" => "Tim Curry",
        "attrice_protagonista" => "Susan Sarandon",

    ],
    [
        $strade -> return_titolo(),
        "anno" => "1997",
        "genere" => "noir, thriller",
        "regista" => "David Lynch",
        "sceneggiatore" => "David Lynch, Barry Gifford",
        "attore protagonista" => "Bill Pullman",
        "attrice protagonista" => "Patricia Arquette",
    ],
];

foreach($listaFilm as $film => $array){
    foreach($array as $film2 => $array2) {
    echo $array2. "<br>";
}
}

?>