<?php
// Traitement du formulaire
$erreur = "";
$confirmation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST["nom"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    if ($nom && $email && $message) {
        $confirmation = "✅ Merci $nom ! Votre message a été envoyé avec succès.";
    } else {
        $erreur = "❌ Tous les champs sont obligatoires.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #f6d365, #fda085);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            max-width: 500px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #FF5722;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 8px;
            margin-top: 5px;
            background-color: #f9f9f9;
            transition: 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #FF5722;
            background-color: #fff;
            outline: none;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #FF5722;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #e64a19;
        }

        .message {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📬 Contactez-nous</h2>

    <form method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Votre email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>

        <button type="submit">Envoyer</button>
    </form>

    <?php if ($erreur): ?>
        <div class="message error"><?= htmlspecialchars($erreur) ?></div>
    <?php elseif ($confirmation): ?>
        <div class="message success"><?= htmlspecialchars($confirmation) ?></div>
    <?php endif; ?>
</div>

</body>
</html>
