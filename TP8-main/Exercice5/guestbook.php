<?php
$nom_fichier = "messages.txt";

// Enregistrement
if (isset($_POST['envoyer'])) {
    $nom = trim($_POST['nom']);
    $message = trim($_POST['message']);
    if (!empty($nom) && !empty($message)) {
        $date = date("d/m/Y H:i:s");
        $ligne = "$date | $nom : $message" . PHP_EOL;
        file_put_contents($nom_fichier, $ligne, FILE_APPEND);
    }
}

// Chargement
$messages = [];
if (file_exists($nom_fichier)) {
    $messages = file($nom_fichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

// Suppression
if (isset($_GET['delete'])) {
    $index_to_delete = (int) $_GET['delete'];
    if (isset($messages[$index_to_delete])) {
        unset($messages[$index_to_delete]);
        $messages = array_values($messages);
        file_put_contents($nom_fichier, implode(PHP_EOL, $messages));
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livre d’or Stylé</title>
    <style>
        /* General styling */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 12px 25px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            color: #4B0082;
            margin-bottom: 30px;
        }

        form {
            margin-bottom: 40px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            color: #333;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 2px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            transition: 0.3s;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #4B0082;
            background-color: #fff;
            outline: none;
        }

        button {
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #4B0082;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #6A0DAD;
        }

        .message {
            background: linear-gradient(to right, #FFDEE9, #B5FFFC);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            position: relative;
        }

        .message:hover {
            transform: scale(1.02);
            transition: transform 0.2s ease-in-out;
        }

        .delete-link {
            position: absolute;
            top: 10px;
            right: 10px;
            text-decoration: none;
            color: crimson;
            font-weight: bold;
        }

        .delete-link:hover {
            color: darkred;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>🌟 Livre d’or 🌟</h1>

    <!-- Formulaire -->
    <form method="post">
        <label for="nom">Votre nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="message">Votre message :</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" name="envoyer">💌 Envoyer</button>
    </form>

    <!-- Messages -->
    <h2>💬 Messages des visiteurs</h2>
    <?php if (!empty($messages)): ?>
        <?php foreach ($messages as $index => $msg): ?>
            <div class="message">
                <?= htmlspecialchars($msg) ?>
                <a class="delete-link" href="?delete=<?= $index ?>" onclick="return confirm('Supprimer ce message ?')">✖</a>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun message pour le moment. Soyez le premier à écrire !</p>
    <?php endif; ?>
</div>

</body>
</html>
