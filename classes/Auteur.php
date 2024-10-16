<?php

/**
 * création de la classe Auteur et ces attributs;
 * 
 */
class Auteur
{
	// les attributs
	private string $nom;
	private string $prenom;
	private array $livres;

	//déclaration du constructeur

	public function __construct(string $nom, string $prenom,)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->livres = [];
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
	/**
	 * rajouter les getter et setter de la classe Livres
	 *
	 * @return void
	 */
	public function getLivres()
	{
		return $this->livres;
	}

	public function setLivre($livres)
	{
		$this->livres = $livres;

		return $this;
	}
	/**
	 * créer la fonction qui rajoute les livres instanciés
	 * au tableau Livres.
	 */
	public function addLivre(Livre $livre)
	{
		$this->livres[] = $livre;
		// autre synthaxe ==> 
		//array_push ($this->livres,$livre)
	}

/**
 * fonction pour afficher tous les livres de l'auteur
 * et on utilise une foreach pour parcourir le tableau des livres
 */

	public function afficheBibliographie()
	{
		$result =  "<h1> $this  <br> </h1> <ul>";
		foreach ($this->livres as $livre) {
			$result .=   '<li>'.$livre.'</li>'  ;
		}
		$result .= '</ul>';
		return $result;
	}


/**
 * declaration de la fonction de l'affichage avec echo 
 */

	public function getInfosAuteur()
	{
		return "Livres de  " . $this->getPrenom() . " " . $this->getNom();
	}
/**
 * déclaration de la tostring ( pas trop remplir just l'essetiel )
 */

	public function __tostring()
	{
		return $this->prenom . " " . $this->nom;
	}
};
