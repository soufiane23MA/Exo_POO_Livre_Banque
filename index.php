<?php

/**
 * require_once 'classes/Auteur.php';
 *require_once 'classes/Livre.php';
 *attention il ne faut pas oublier de rajouter la classe de tes 
 *2 ficher (LIVRES et Auteurs)
 */

spl_autoload_register(function ($class_name) {
	require 'classes/'. $class_name . '.php';
});

/**
 * instancier les Livres 
 */
$auteur = new Auteur("King", "Stephen");
 

$livre1 = new Livre("Ca", 1138, '1986', 20, $auteur);
$livre2 = new Livre("Simetierre", 374, "1983", 15, $auteur);
$livre3 = new Livre("Le Fléau", 823, "1978", 14, $auteur);
$livre4 = new Livre("Shinning", 447, "1977", 16, $auteur);

/**
 * là l'ensemble de teste que j ai pu faire 
 */

//echo (" Livres de ".$auteur. " <br>" .$livre1."<br>".$livre2."<br>".$livre3."<br>".$livre4);

//echo $auteur->getInfosAuteur() ." <br>";
 

/*echo $livre1. $livre1->getInfoslivre();
echo $livre2. $livre2->getInfoslivre();
echo $livre3. $livre3->getInfoslivre();
echo $livre4. $livre4->getInfoslivre();*/
//var_dump($auteur);


echo $auteur->afficheBibliographie();
