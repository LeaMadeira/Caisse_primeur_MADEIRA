<?php 

abstract class Produit {
	
	protected $nom = "";

	protected $poids = 0;
   
	protected $prixKilo = 0;
   
	protected $prixUnite = 0;

	public static $compteur = 0 ;

	public function __construct($n) {
		$this->nom = $n;

		self::$compteur++;
	}

	public function venteKilo($nom, $poids, $prixKilo){
        $nom->nom;
    }
	
	public function venteUnite($nom, $prixUnite){
        $nom->nom;
    }
 
}

?>

