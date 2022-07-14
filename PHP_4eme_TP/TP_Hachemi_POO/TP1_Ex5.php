<?php 
      class CompteBancaire{
            private $nom; 
            private $id;
            private $solde;
            
            public function __construct($nom='', $id=0, $solde=0.0){
                  $this->nom = (String)$nom; 
                  $this->id = (int)$id;
                  $this->solde = (double)$solde;
            }
            public function virement($montant){
                  $montant = (double)$montant;
                  if($montant > 0){
                        $this->solde += $montant;
                  }
                  else{
                        echo "Error";
                  }
            }
            public function retrait($montant){
                  $montant = (double)$montant;
                  if($montant > 0 && $montant <= $this->solde){
                        $this->solde -= $montant;
                  }
                  else{
                        echo "Erreur";
                  }
            }
            public function affichage(){
                  echo "Nom : ".$this->nom."<br>";
                  echo "id  : ".$this->id."<br>";
                  echo "Solde : ".$this->solde."<br>";
            }
      }

      $nom = "senou";
      $id = 19; 
      $solde = 50;
      $compte = new CompteBancaire($nom, $id, $solde);
      $compte->affichage();

      echo "<br>";
      $compte->virement(1000);
      $compte->affichage();

      echo "<br>";
      $compte->retrait(50);
      $compte->affichage();

?>