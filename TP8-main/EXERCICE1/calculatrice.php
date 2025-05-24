<?php
$resultat = null;
$erreur = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre1 = $_POST["nombre1"] ?? null;
    $nombre2 = $_POST["nombre2"] ?? null;
    $operation = $_POST["operation"] ?? null;

    if (is_numeric($nombre1) && is_numeric($nombre2)) {
        switch ($operation) {
            case "add":
                $resultat = $nombre1 + $nombre2;
                break;
            case "sub":
                $resultat = $nombre1 - $nombre2;
                break;
            case "mul":
                $resultat = $nombre1 * $nombre2;
                break;
            case "div":
                if ($nombre2 != 0) {
                    $resultat = $nombre1 / $nombre2;
                } else {
                    $erreur = "❌ Division par zéro impossible.";
                }
                break;
            default:
                $erreur = "❌ Opération inconnue.";
        }
    } else {
        $erreur = "❌ Veuillez entrer deux nombres valides.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #d3d3d3, #f0f0f0);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #ffffffcc;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #555;
            margin-bottom: 25px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #999;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #777;
        }

        .result, .error {
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 16px;
        }

        .result {
            color: #2e7d32;
        }

        .error {
            color: #d32f2f;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>🧮 Calculatrice PHP</h2>

    <form method="post">
        <input type="number" name="nombre1" placeholder="Premier nombre" step="any" required>
        <input type="number" name="nombre2" placeholder="Deuxième nombre" step="any" required>

        <select name="operation" required>
            <option value="add">Addition (+)</option>
            <option value="sub">Soustraction (-)</option>
            <option value="mul">Multiplication (×)</option>
            <option value="div">Division (÷)</option>
        </select>

        <button type="submit">Calculer</button>
    </form>

    <?php if ($resultat !== null): ?>
        <div class="result">✅ Résultat : <?= htmlspecialchars($resultat) ?></div>
    <?php elseif ($erreur): ?>
        <div class="error"><?= htmlspecialchars($erreur) ?></div>
    <?php endif; ?>
</div>

</body>
</html>
