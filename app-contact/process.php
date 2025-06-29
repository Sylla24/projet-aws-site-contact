<?php
$data = [
    "nom" => $_POST["nom"],
    "email" => $_POST["email"],
    "message" => $_POST["message"],
    "date" => date("Y-m-d H:i:s")
];

$file = 'messages.json';

$messages = [];

if (file_exists($file)) {
    $json = file_get_contents($file);
    $messages = json_decode($json, true);
}

$messages[] = $data;

file_put_contents($file, json_encode($messages, JSON_PRETTY_PRINT));

echo "Message envoyé avec succès ! <a href='index.php'>Retour</a>";
?>
