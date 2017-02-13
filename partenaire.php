<?php
class Partenaire {
   
    private $numId;//Déclarer des propriétés
    private $nom;//Déclarer des propriétés
    
  public function __construct(){//constructeur
    
       $this->numId="Inconnu";//initialise les propriétés
       //echo"Toto";
       $this->nom="Pas de nom";//initialise les propriétés
       //echo"Toto";
  } 
  
   //public function afficher(){
       //$nom="Toto fils";
       //echo $this->nom;
   //}
   
  //public function setnumId($id){
      //$this->numId=$id;
  //}
  
   public function afficher(){
       echo"le numId est $this->numId</br>";
       echo "Le nom du partenaire est $this->nom";
   }    
  

}
class Artiste Extends Partenaire {
    private $telBooker;
    function Artiste(){
        $this->__construct();
        $this->telBooker="aucun";
    }
        function afficher(){
            echo"Le tel du booker est $this->telBooker";
    }
}

$p1= new Partenaire();
//echo $p1->nom="Toto";

//$p1->setnumId(188);

$p2= new Artiste();
$p2->afficher();

var_dump($p1);//affiche mes propriétés

?>
