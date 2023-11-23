<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurez-vous que les données sont bien définies avant de les utiliser
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Faites quelque chose avec les données, par exemple, les imprimer
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Subject: " . $subject . "<br>";
    echo "Message: " . $message . "<br>";

    // Vous pouvez ajouter ici le code pour envoyer un e-mail, enregistrer les données dans une base de données, etc.
} else {
    // Répondez avec une erreur si la méthode de requête n'est pas POST
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
