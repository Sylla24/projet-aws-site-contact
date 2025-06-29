<?php
// Authentification HTTP basique
$USER = 'admin';
$PASS = 'contact123';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    $_SERVER['PHP_AUTH_USER'] !== $USER || $_SERVER['PHP_AUTH_PW'] !== $PASS) {
    header('WWW-Authenticate: Basic realm="Zone sécurisée"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Accès refusé';
    exit;
}

// Lecture du fichier JSON
$messages = [];

if (file_exists("messages.json")) {
    $json = file_get_contents("messages.json");
    $messages = json_decode($json, true);
}
?>

<h1>Liste des messages reçus</h1>

<?php foreach ($messages as $msg): ?>
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <strong>Nom:</strong> <?= htmlspecialchars($msg['nom']) ?><br>
        <strong>Email:</strong> <?= htmlspecialchars($msg['email']) ?><br>
        <strong>Message:</strong> <?= nl2br(htmlspecialchars($msg['message'])) ?><br>
        <small>Reçu le : <?= $msg['date'] ?></small>
    </div>
<?php endforeach; ?>

