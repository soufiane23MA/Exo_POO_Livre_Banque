<?php

/**
 * création de la classe Auteur et ces attributs;
 * 
 */
class Auteur
{
	// les attributs
	private $_nom ;
	private $_prenom ;

	//déclaration du constructeur
	public function __construct($nom, $prenom)
	{
		$this->_nom = $nom;
		$this->_prenom = $prenom;
	}
	public function __tostring(){
		return $this -> _prenom." ".$this ->_nom;
	}
 
};  