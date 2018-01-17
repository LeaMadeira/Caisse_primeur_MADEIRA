<?php

require_once('Produit.php');

// CD : tres bien pour l'héritage
class ProduitKilo extends Produit{

	
	
	// CD ces trois lignes ne doivent pas apparaitre ici car c'est l'instanciation
	//$pomme = new Produit ('Pomme');
	//$pomme->poids = 2 ;
	//$pomme->prixKilo = 2 ;
	
 	public $poids = 0;  
	
	// CD : le construction doit toujours etre public
	// correction
	public function __construct($nom, $prixKilo, $poids)
	{		
			$this->nom = $nom;
			$this->prix = $prixKilo;
			$this->poids = $poids ;
	}
	/*protected function __construct($pomme){
		echo "<br>Nouvelle vente";
		parent::__construct($pomme);
 		$this->nom = $pomme;
	}*/

	// cette fonction doit etre public
	//protected function __toString(){
	// correction :
	public function __toString(){
		return "<hr>Nouvelle vente !".
			"<br> Produit : ".$this->nom.
			"<br> Prix : ".$this->prixKilo."<hr>";
	}

	// ok, mais en public, ca aurait plus de sens	
	protected function venteKilo(){
		return ($this->poids*$this->prixKilo);
	}

}

?>
