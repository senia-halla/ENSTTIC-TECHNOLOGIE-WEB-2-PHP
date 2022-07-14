<?php 
      class Personne{
            private $nom; 
            private $prenom; 
            private $age; 

            public function __construct($nom,$prenom,$age){
                  $this->nom = $nom; 
                  $this->prenom = $prenom; 
                  $this->age = $age;
            }
            public function toString(){
                  return "Nom : $this->nom <br> Prenom : $this->prenom <br> Age : $this->age ans <br>";
            }
      }
      class Enseignant extends Personne{
            private $module;
            public function __construct($nom, $prenom, $age, $module){
                  parent::__construct($nom, $prenom, $age);
                  $this->module = $module;
            }
            public function toString(){
                  return "Enseignant <br>".parent::toString()."Module : $this->module <br>";
            }
      }
      class Secretaire extends Personne{
            private $bureau;
            public function __construct($nom, $prenom, $age, $bureau){
                  parent::__construct($nom, $prenom, $age);
                  $this->bureau = $bureau;
            }
            public function toString(){
                  return "Secretaire <br>".parent::toString()."Num Bureau : $this->bureau <br>";
            }
      }
      class Etudiant extends Personne{
            private $promotion; 
            public function __construct($nom, $prenom, $age, $promotion){
                  parent::__construct($nom, $prenom, $age);
                  $this->promotion = $promotion;
            }
            public function toString(){
                  return "Etudiant <br>".parent::toString()."Promotion : $this->promotion <br>";
            }
      }

      $per = new Personne("H", "A", 22);
      $ens = new Enseignant("R", "H", 46, "POO");
      $etu = new Etudiant("S", "H", 20, 43);
      $sec = new Secretaire("HS", "HAA", 11, 11);
      echo $per->toString()."<br>";
      echo $ens->toString()."<br>";
      echo $etu->toString()."<br>";
      echo $sec->toString()."<br>";
?>