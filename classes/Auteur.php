<?php

/**
 * création de la classe Auteur et ces attributs;
 * 
 */
class Auteur
{
	// les attributs
	private string $nom ;
	private string $prenom ;

	//déclaration du constructeur
	
	public function __construct( string $nom, string $prenom,)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
	}
	
	public function getPrenom()
	{
		return $this->prenom;
	}
	
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;

		return $this;
	}
	  
	public function getNom()
	{
		return $this->nom;
	}
	 
	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
	}
	public function affichAuteur(){
		return $this->prenom ." ". $this->nom;
	}
	/**
	 * declaration de la fonction de l'affichage avec echo 
	 */
		
	public function getInfosAuteur (){
		return "Livres de  " .$this->getPrenom() . " " . $this->getNom();
	}
	/**
	 * déclaration de la tostring ( pas trop remplir just l'essetiel )
	 */
	
	public function __tostring()
	{
		return $this->prenom . " " . $this->nom . $this->livre1;
	}
};  