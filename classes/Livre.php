<?php

/**
 * création de la classe Livre
 */
class Livre
{
	private $_titre ;
	private $_nbDePages;
	private $_dateDeParution;
	private $_prix;
	private $_auteur;
	/**
	 * déclaration du constructeur
	 */

	public function __construct($titre,$nbDePages,$dateDeParution,$prix,Auteur $auteur)
	{
		$this->_titre = $titre;
		$this ->_nbDePages = $nbDePages;
		$this ->_dateDeParution = $dateDeParution;
		$this ->_prix = $prix;
		$this ->_auteur = $auteur;
	}
 public function __tostring(){
	return  "" .$this->_titre . " (".$this->_dateDeParution.") : ".$this ->_nbDePages.' pages / '. $this->_prix;
 }


};

 
