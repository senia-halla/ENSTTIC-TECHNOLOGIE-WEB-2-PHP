<?php 
      class Calculatrice{
            private $num_1; 
            private $num_2;

            public function __construct($num_1, $num_2){
                  $this->num_1 = (int)$num_1;
                  $this->num_2 = (int)$num_2;
            }

            public function addition(){
                  return $this->num_1 + $this->num_2;
            }

            public function soustraction(){
                  return $this->num_1 - $this->num_2;
            }

            public function multiplication(){
                  return $this->num_1 * $this->num_2;
            }

            public function division(){
                  if($this->num_2 == 0){
                        echo "Impossible d'effectuer une division sur 0";
                  }else {
                        return $this->num_1 / $this->num_2;
                  }
            }
      }


      $calcul = new Calculatrice(7," ");
      echo "Afficher Calcul Basique : <br>";
      echo "Num 1 + Num 2 = ".$calcul->addition()."<br>";
      echo "Num 1 - Num 2 = ".$calcul->soustraction()."<br>";
      echo "Num 1 * Num 2 = ".$calcul->multiplication()."<br>"; 
      echo "Num 1 / Num 2 = ".$calcul->division()."<br>";
?>