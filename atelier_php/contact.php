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

    echo "<table>";
    echo "<tr><td>Nom</td><td>$nom</td></tr>";
    echo "<tr><td>Prénom</td><td>$prenom</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Téléphone</td><td>$telephone</td></tr>";
    echo "<tr><td>Adresse</td><td>$adresse</td></tr>";
    echo "<tr><td>Code Postal</td><td>$code_postal</td></tr>";
    echo "</table>";
}
