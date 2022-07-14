<?php 
      class Form{
            private $action, $method, $inputs;
            public $balise;
            public function __construct($method = "get", $action = "#", $inputs = array()){
                  $this->action = $action; 
                  $this->method = $method;
                  $this->inputs = $inputs; 
            }

            public function balise($html){
                  return "<{$this->balise}>$html</{$this->balise}> ";
            }

            public function addInput($name, $type, $label){
                  if(array_key_exists($name, $this->inputs) == True){
                        return "Error ! the name should be unique ! ";
                  }
                  $newInput = array('type' => $type, 'label' => $label);
                  $this->inputs[$name] = $newInput;
            }

            public function getHtml(){
                  $result = '<form action="'. $this->action . '" method = "' . $this->method . '">';

                  foreach($this->inputs as $name => $inputElement){
                        $result .= $this->balise($inputElement["label"] . ' : <input type="' . $inputElement["type"] . '" name="'. $name . '">');
                  }
                  $result .= '<button type="submit">Submit</button>';
                  $result .= '</form>';
                  return $result;
            }
      }
?>

<?php
      $form = new Form();

      $data = array("username" => array("type" => "text", "label" => "your username"),
                    "password" => array("type" => "password", "label" => "your password"),
                    "email" => array("type" => "email", "label" => "your email")) ;
      $form2 = new Form("get", "#", $data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- un premier formulaire -->
    <h1>Premier formulaire :</h1>
    <?php
        $form->addInput("text", "username", "your username");
        $form->addInput("password", "password", "your password");
        $form->addInput("email", "email", "your email");
        echo $form->getHtml();
    ?>
    <!-- un deuxième formulaire (les deux sont identiques) -->
    <h1>Deuxième formulaire :</h1>
    <?php 
        echo $form2->getHtml();
    ?>
</body>
</html>