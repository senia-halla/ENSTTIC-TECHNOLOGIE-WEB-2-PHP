<?php

    class Form {
        private $inputs;
        private $method;
        private $action;
        //  $surround utiliser par la fonction surround()
        public $surround = 'p';
        
        // constructeur de la classe
        // les attributs ont des valeurs par défaut et donc il est possible d'instancier un objet sans passer aucun paramètre
        public function __construct($method = "get", $action = "#", $inputs = array()){ /* Valeurs par défaut */
            $this->inputs = $inputs;
            $this->method = $method;
            $this->action = $action;
        }
        // une simple fonction qui permet de placer un input à l'intérieur d'une balise p
        private function surround($html){
            return "<{$this->surround}>$html</{$this->surround}>";
        }

        // ajout un input à l'attribut inputs mais il faut d'abord tester s'il n y a pas un autre input avec le même "name"
        public function addInput($type, $name, $label){
            if(array_key_exists($name, $this->inputs) === true){
                echo "add an input failed";
                return;
            }
            $newInput = array("type" => $type, "label" => $label);
            $this->inputs[$name] = $newInput;
        }

        //  retourner le code HTML du formulaire
        public function getHtml(){
            $result = '<form action="'. $this->action . '" method = "' . $this->method . '">';
            foreach($this->inputs as $name => $inputElement){
                $result .= $this->surround( /* Juste pour sauter la ligne <p> label: <input type = ..., name = ...> </p> */
                    $inputElement["label"] . ' : <input type="' . $inputElement["type"] . '" name="'. $name . '">'
                );
            }
            $result .= '<button type="submit">Submit</button>'; /* Boutton submit */
            $result .= '</form>'; 
            /* $a .= "x" <=> $a = $a."yes" */
            return $result;
        }
    }
?>