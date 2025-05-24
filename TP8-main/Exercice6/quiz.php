<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Quiz</title>
</head>
<body>
    <style>
   /* style.css */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.quiz-container {
    background-color: #fff;
    padding: 20px;
    width: 80%;
    max-width: 800px;
    margin: 40px auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

.question {
    margin-bottom: 20px;
}

.question p {
    font-size: 16px;
    color: #333;
}

input[type="radio"] {
    margin-right: 10px;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    margin-top: 20px;
}

button:hover {
    background-color: #45a049;
}

    </style> 
    <div class="quiz-container">
        <h1>Quiz de Connaissances Générales</h1>
        <form method="post">
            <div class="question">
                <p>1. Quel est le plus grand océan de la Terre ?</p>
                <input type="radio" name="q1" value="Atlantique" required> Atlantique
                <input type="radio" name="q1" value="Indien"> Indien
                <input type="radio" name="q1" value="Arctique"> Arctique
                <input type="radio" name="q1" value="Pacifique"> Pacifique
                <input type="radio" name="q1" value="Sud"> Océan Sud
            </div>

            <div class="question">
                <p>2. Qui a peint la Joconde ?</p>
                <input type="radio" name="q2" value="Van Gogh"> Van Gogh
                <input type="radio" name="q2" value="Picasso"> Picasso
                <input type="radio" name="q2" value="Da Vinci" required> Léonard de Vinci
                <input type="radio" name="q2" value="Monet"> Monet
                <input type="radio" name="q2" value="Dali"> Salvador Dali
            </div>

            <div class="question">
                <p>3. Quel est le pays le plus peuplé du monde ?</p>
                <input type="radio" name="q3" value="Inde"> Inde
                <input type="radio" name="q3" value="USA"> États-Unis
                <input type="radio" name="q3" value="Chine" required> Chine
                <input type="radio" name="q3" value="Brésil"> Brésil
                <input type="radio" name="q3" value="Russie"> Russie
            </div>

            <div class="question">
                <p>4. Quel est l'élément chimique dont le symbole est 'O' ?</p>
                <input type="radio" name="q4" value="Or"> Or
                <input type="radio" name="q4" value="Oxygène" required> Oxygène
                <input type="radio" name="q4" value="Osmium"> Osmium
                <input type="radio" name="q4" value="Ozone"> Ozone
                <input type="radio" name="q4" value="Oxyde"> Oxyde
            </div>

            <div class="question">
                <p>5. En quelle année a eu lieu le premier vol des frères Wright ?</p>
                <input type="radio" name="q5" value="1900"> 1900
                <input type="radio" name="q5" value="1910"> 1910
                <input type="radio" name="q5" value="1903" required> 1903
                <input type="radio" name="q5" value="1920"> 1920
                <input type="radio" name="q5" value="1930"> 1930
            </div>

            <div class="question">
                <p>6. Qui a écrit "Les Misérables" ?</p>
                <input type="radio" name="q6" value="Flaubert"> Gustave Flaubert
                <input type="radio" name="q6" value="Hugo" required> Victor Hugo
                <input type="radio" name="q6" value="Zola"> Émile Zola
                <input type="radio" name="q6" value="Balzac"> Honoré de Balzac
                <input type="radio" name="q6" value="Molière"> Molière
            </div>

            <div class="question">
                <p>7. Combien de continents y a-t-il sur Terre ?</p>
                <input type="radio" name="q7" value="5"> 5
                <input type="radio" name="q7" value="6"> 6
                <input type="radio" name="q7" value="7" required> 7
                <input type="radio" name="q7" value="8"> 8
                <input type="radio" name="q7" value="4"> 4
            </div>

            <div class="question">
                <p>8. Quel est l'animal terrestre le plus rapide ?</p>
                <input type="radio" name="q8" value="Guépard" required> Guépard
                <input type="radio" name="q8" value="Lion"> Lion
                <input type="radio" name="q8" value="Tigre"> Tigre
                <input type="radio" name="q8" value="Eléphant"> Eléphant
                <input type="radio" name="q8" value="Zèbre"> Zèbre
            </div>

            <div class="question">
                <p>9. Quel est le plus grand désert du monde ?</p>
                <input type="radio" name="q9" value="Sahara"> Sahara
                <input type="radio" name="q9" value="Gobi"> Gobi
                <input type="radio" name="q9" value="Kalahari"> Kalahari
                <input type="radio" name="q9" value="Antarctique" required> Antarctique
                <input type="radio" name="q9" value="Arctique"> Arctique
            </div>

            <div class="question">
                <p>10. Quelle est la capitale du Japon ?</p>
                <input type="radio" name="q10" value="Pékin"> Pékin
                <input type="radio" name="q10" value="Séoul"> Séoul
                <input type="radio" name="q10" value="Tokyo" required> Tokyo
                <input type="radio" name="q10" value="Bangkok"> Bangkok
                <input type="radio" name="q10" value="Manille"> Manille
            </div>

            <div class="question">
                <p>11. Quel est l'organe principal de la respiration chez l'homme ?</p>
                <input type="radio" name="q11" value="Coeur"> Coeur
                <input type="radio" name="q11" value="Poumons" required> Poumons
                <input type="radio" name="q11" value="Foie"> Foie
                <input type="radio" name="q11" value="Estomac"> Estomac
                <input type="radio" name="q11" value="Reins"> Reins
            </div>

            <button type="submit">Soumettre</button>
        </form>
    </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Questions et réponses correctes
    $answers = [
        'q1' => 'Pacifique',
        'q2' => 'Da Vinci',
        'q3' => 'Chine',
        'q4' => 'Oxygène',
        'q5' => '1903',
        'q6' => 'Hugo',
        'q7' => '7',
        'q8' => 'Guépard',
        'q9' => 'Antarctique',
        'q10' => 'Tokyo',
        'q11' => 'Poumons'
    ];

    // Evaluation des réponses
    foreach ($answers as $key => $correct_answer) {
        if ($_POST[$key] == $correct_answer) {
            $score++;
        }
    }

    echo "<h2>Votre score est de " . $score . " sur 11.</h2>";
}
?>
