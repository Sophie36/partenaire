<?php
class Partenaire {
   
    private $numId;//Déclarer des propriétés
    private $nom;//Déclarer des propriétés
    
  public function __construct(){//constructeur
    
       $this->numId="Inconnu";//initialise les propriétés
       //echo"Toto";
       $this->nom="Pas de nom";//initialise les propriétés
       //echo"Toto";
     
   //public function afficher(){
       //$nom="Toto fils";
       //echo $this->nom;
   //}
  }     
  public function setnumId($id){
      $this->numId=$id;
  }
}
$p1= new Partenaire();
//echo $p1->nom="Toto";

$p1->setnumId(188);
var_dump($p1);//affiche mes propriétés

?>
