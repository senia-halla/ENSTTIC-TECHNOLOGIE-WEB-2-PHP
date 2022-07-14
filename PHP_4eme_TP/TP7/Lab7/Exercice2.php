<?php
include "Form.php";
$form = new Form();

// autre manière d'instancier un objet de la classe Form
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