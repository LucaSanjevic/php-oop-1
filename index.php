<?php

class Movie {
   public $titolo;
   public $anno;
   public $genere;
   public $regista;
   
   public function __construct($titolo, $anno, $genere, $regista)
   {
    $this->titolo = $titolo;
    $this->anno = $anno;
    $this->genere = $genere;
    $this->regista = $regista;
   }

   public function return_titolo() {
    echo $this->titolo . " " .  "<br>";
    echo $this->anno . " " .  "<br>";
    echo $this->genere . " " .  "<br>";
    echo $this->regista . " " .  "<br>";
   }


}

$rhps = new Movie("The Rocky Horror Picture Show","1975","musical","Jim Sharman");
$strade = new Movie("Strade Perdute","1997","noir, thriller","David Lynch");

$rhps->return_titolo();
$strade->return_titolo();

?>