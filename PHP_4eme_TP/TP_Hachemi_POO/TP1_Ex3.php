<?php 
      class Point{
            private $nom;
            private $x;
            public function __construct($nom = 'o', $x = 0.0){
                  $this->nom = $nom; 
                  $this->x = (double)$x;
            }
            public function affichage(){
                  return "($this->nom, $this->x)";
            }
            public function translate($dx){
                  $this->x += $dx;
            }
      }

      $p1 = new Point();
      echo $p1->affichage();
      
      echo "<br>";

      $p2 = new Point('s');
      echo $p2->affichage();

      echo "<br>";
      
      $p3 = new Point('h',2.5);
      $p3->translate(1);
      echo $p3->affichage(); 

?>