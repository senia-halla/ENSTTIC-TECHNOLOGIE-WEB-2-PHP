<?php 
      
      class Entier{
            private $entier = 0;
            public function __construct($entier){
                  $this->entier = $entier; 
            }

            public function affichage(){
                  return "Le entier ".$this->entier."<br>";
            }

            public function incremente($i){
                  return $this->entier += $i;  
            }

      }

      $n1 = new Entier(2);
      $n2 = new Entier(5);

      echo "n1 = ".$n1->affichage()."<br> n2 = ".$n2->affichage()."<br>";
      $n1 = new Entier($n1->incremente(3));
      echo $n1->affichage()."<br>";
      if ($n1 === $n2) {
            echo "n1, n2 Egalité <br>";
      }else{
            echo "n1, n2 Non Egalité <br>";
      }

      $n1 = $n2;
      $n2 = new Entier($n2->incremente(1)); 
      
      echo "n1 = ".$n1->affichage()."<br> n2 = ".$n2->affichage()."<br>";


?>