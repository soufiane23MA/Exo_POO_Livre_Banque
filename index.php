<?php
require_once 'classes/Auteur.php';
require_once 'classes/Livre.php';

/**
 * instancier les Livres 
 */
$auteur = new Auteur("King", "Stephen");
 
$livre1 = new Livre("Ca", 1138 , '1986', '20 €', $auteur);
$livre2 = new Livre ( "Simetierre",374, "1983","15 €",$auteur);
$livre3 = new Livre("Le Fléau",823,"1978","14 €",$auteur);
$livre4 = new Livre("Shinning",447,"1977","16 €",$auteur);


echo (" Livres de ".$auteur. " <br>" .$livre1."<br>".$livre2."<br>".$livre3."<br>".$livre4);
