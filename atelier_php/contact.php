<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $adresse = $_POST["adresse"];
    $code_postal = $_POST["code_postal"];

    $fields = [$nom, $prenom, $email, $telephone, $adresse, $code_postal];

    foreach ($fields as $field) {
        if (empty($field)) {
            echo "Champs manquants";
            return;
        }
    }

    //too lazy to solve this border mess
    echo "<table style='border:1px solid black;'>";
    echo "<tr><td style='border:1px solid black;'>Nom</td><td style='border:1px solid black;'>Prénom</td><td style='border:1px solid black;'>Email</td><td style='border:1px solid black;'>Téléphone</td><td style='border:1px solid black;'>Adresse</td><td style='border:1px solid black;'>Code Postal</td></tr>";
    echo "<tr><td style='border:1px solid black;'>$nom</td><td style='border:1px solid black;'>$prenom</td><td style='border:1px solid black;'>$email</td><td style='border:1px solid black;'>$telephone</td><td style='border:1px solid black;'>$adresse</td><td style='border:1px solid black;'>$code_postal</td></tr>";
    echo "</table>";
}
