<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $psswd = $_POST['psswd'];
    $sexe = $_POST['sexe'];

    echo "Nom: " . $nom . "<br>";
    echo "Contrasenya: " . $psswd . "<br>";
    echo "Sexe: " . $sexe . "<br>";
    $_SESSION['user'] = $nom;
}



?>