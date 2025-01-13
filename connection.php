<?php
// Connexion à la base de données
$con = mysqli_connect("localhost", "root", "", "f2b_ecom");

// Vérifier la connexion
if (mysqli_connect_errno()) {
    echo "Echec de la connexion a MySQL: " . mysqli_connect_error();
    exit();
}

?>