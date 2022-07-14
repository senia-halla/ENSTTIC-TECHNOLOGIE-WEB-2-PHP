<?php 
      abstract class Forme{
            abstract function perimetre();
            abstract function surface();
             #Methode 
            public function plusGrand(Forme $f){
                  if($this->surface() < $f->surface()){
                        echo "f est plus grand <br>";
                  }
                  else{
                        echo "Cette forme est plus grande <br>";
                  }
            }

            public static function plusGrande(Forme $f1, Forme $f2){
                  if($f1->surface() < $f2->surface()){
                        echo "f1 est plus petit <br>";
                  }else {
                        echo "f2 est plus petit <br>";
                  }
            }
      }

      class Cercle extends Forme{
            private $rayon;
            public function __construct($rayon){
                  $this->rayon = $rayon; 
            }
            public function perimetre(){
                  return (2 * $this->rayon * pi());
            }
            public function surface(){
                  return (($this->rayon ** 2) * pi()); 
            }
      }

      class Rectangle extends Forme{
            private $largeur; 
            private $longeur; 
            public function __construct($longeur, $largeur){
                  $this->longeur = $longeur; 
                  $this->largeur = $largeur; 
            }
            public function perimetre(){
                  return (2 * ($this->longeur + $this->largeur));
            }
            public function surface(){
                  return ($this->longeur * $this->largeur);
            }
      }

      class Carre extends Rectangle{
            public function __construct($c){
                  parent::construct($c, $c);
            }
      }

      $cer = new Cercle (1); 
      echo "Cercle <br> Surface ".$cer->surface()."<br> Perimetre ".$cer->perimetre()."<br>";

      $rect = new Rectangle (1,2); 
      echo "Rectangle <br> Surface ".$rect->surface()."<br> Perimetre ".$rect->perimetre()."<br>";

      $cer->plusGrand($rect);
      Forme::plusGrande($cer, $rect);
?>