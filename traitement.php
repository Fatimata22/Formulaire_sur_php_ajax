<?php


if (!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {

    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $textarea = $_POST["message"];
    // $sexe = $_POST["sexe"];

    echo($prenom .' '. $nom .' '. $email .' '. $textarea .'<br>');

    echo ($prenom);
    echo ($nom);
    echo ($email);
    echo ($textarea);
    // echo ($sexe);
}


?>
