<?php
    class Calculatrice {
        // les attributs privés
        private $nombre1, $nombre2; 
        // le constructeur de la classe
        public function __construct($nombre1, $nombre2) { /* initialiser les 2 attributs avec les valeurs passer en arguments */
            $this->nombre1 = $nombre1;
            $this->nombre2 = $nombre2;
        }
        // les méthodes de calcul de base
        public function add() { /* public , private => les modificateur d'accées */
            return $this->nombre1 + $this->nombre2;
        }
        public function sub() {
            return $this->nombre1 - $this->nombre2;
        }
        public function mul() {
            return $this->nombre1 * $this->nombre2;
        }
        public function div() {
            if($this->nombre2 === 0){
                return "division par 0 impossible";
            }
            return $this->nombre1 / $this->nombre2;
        }
    }
?>