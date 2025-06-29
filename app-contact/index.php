<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Application PHP</title>
</head>
<body>
    <h1>Formulaire de contact</h1>
    <form action="process.php" method="POST">
        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Email :</label><br>
        <input type="email" name="email" required><br><br>

        <label>Message :</label><br>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
