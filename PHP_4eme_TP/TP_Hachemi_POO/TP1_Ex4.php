<?php 
      class Point{
            #attributs
            private $nom;
            private $x;
            private $y;
            #constructeur
            public function __construct($nom = 'o', $x = 0.0, $y = 0.0){
                  $this->nom = $nom; 
                  $this->x = (double)$x;
                  $this->y = (double)$y;
            }
            #methodes 
            public function affichage(){
                  return strtoupper($this->nom)."($this->x, $this->y)";
            }
            public function translate_x($dx){
                  $this->x += $dx;
            }
            public function translate_y($dy){
                  $this->y += $dy;
            }
            #Getteur / Setteur 
            public function getNom(){
                  return $this->nom;
            }
            public function getX(){
                  return $this->x;
            }
            public function getY(){
                  return $this->y;
            }
            public function setNom($nom){
                  $this->nom = $nom;
            }
            public function setX($x){
                  $this->x = $x;
            }
            public function setY($y){
                  $this->y = $y;
            }
      }
      class Segment{
            private $org;
            private $ext;
            private $nom;
            public function __construct($nom, Point $org, Point $ext){
                  $this->nom = $nom;
                  $this->org = $org;
                  $this->ext = $ext;
            }
            public function affichage(){
                  echo "$this->nom[".$this->org->getNom().",".$this->ext->getNom()."]<br>";
                  echo "Point Origine : ".$this->org->affichage()."<br>";
                  echo "Point Extrémité  : ".$this->ext->affichage()."<br>";
            }
            public function longeur(){
                  $x1 = $this->org->getX();
                  $x2 = $this->ext->getX();
                  $y1 = $this->org->getY();
                  $y2 = $this->ext->getY();

                  return sqrt(($x1 - $x2)**2 + ($y1 - $y2)**2);
            }
      }
      $org = new Point('a',0,0);
      $ext = new Point('b',1,1);
      $seg = new Segment('H', $org, $ext);
      $seg->affichage();
      echo "longeur : ".$seg->longeur()."<br>";
?>