<?php

/**
 * création de la classe Livre
 */
class Livre
{
	private string $titre ;
	private int $nbDePages;
	private DateTime $dateDeParution;
	private float $prix;
	private Auteur $auteur;
	/**
	 * déclaration du constructeur
	 */

	public function __construct(string $titre, int $nbDePages,string $dateDeParution,float $prix, Auteur $auteur)
	{
		$this->titre = $titre;
		$this ->nbDePages = $nbDePages;
		$this ->dateDeParution = new DateTime($dateDeParution);
		$this ->prix = $prix;
		$this ->auteur = $auteur;
	}

	/**
	 * Les accesseurs et les mutateurs( getter / setter )
	 */

	public function getNbDePages()
	{
		return $this->nbDePages;
	}

	public function setNbDePages($nbDePages)
	{
		$this->nbDePages = $nbDePages;

		return $this;
	}

	public function getAuteur(): Auteur
	{
		return $this->auteur;
	}

	public function setAuteur(Auteur $auteur)
	{
		$this->auteur = $auteur;

		return $this;
	}

	public function getDateDeParution()
	{
		return $this->dateDeParution;
	}

	public function setDateDeParution($dateDeParution)
	{
		$this->dateDeParution = $dateDeParution;

		return $this;
	}

	public function getPrix()
	{
		return $this->prix;
	}

	public function setPrix($prix)
	{
		$this->prix = $prix;

		return $this;
	}
  
 
	public function getDetailsLivre(){
		return
		$this->nbDePages . ' pages / ' . $this->prix;
		
	}
	 public function getInfoslivre(){
		return $this->getNbDePages() ."  pages /  ". $this->getPrix() ." € . <br> ";
	 }

	public function __tostring()
	{
		return  "" . $this->titre . " (" . $this->dateDeParution->format('Y') . ") :  " ;
	}
		
};

 
