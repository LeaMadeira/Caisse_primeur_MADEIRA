<?php 

abstract class Produit {
	
	protected $nom = "";

	//protected $poids = 0;
   
	//protected $prixKilo = 0;
   	
	protected $sprix;
		
	//protected $prixUnite = 0;

	public static $compteur = 0 ;

	public function __construct($n) {
		$this->nom = $n;
		self::$compteur++;
	}

	// si la classe est asbtraite, il faut au moins une methode abstraite
	public function venteKilo($nom, $poids, $prixKilo){
        $nom->nom;
    }
	
	public function venteUnite($nom, $prixUnite){
        $nom->nom;
    }
 
}

?>

