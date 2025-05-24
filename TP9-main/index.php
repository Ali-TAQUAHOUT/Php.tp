<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Inscription</title> 
    <link rel="stylesheet" href="style.css">
</head> 
<body> 

    <h2>Inscription</h2> 

    <form action="affichage.php" method="POST"> 
        <label>Nom d'étudiant:</label> 
        <input type="text" name="nom" required> 

        <label>Prénom d'étudiant:</label> 
        <input type="text" name="prenom" required> 

        <label>Numéro du Groupe :</label> 
        <input type="number" name="group" min="1" max="50" required> 

        <label>Sujet du Projet:</label> 
        <input type="text" name="sujet" required> 

        <label>Date début :</label> 
        <input type="date" name="date_debut" required> 

        <label>Date final :</label> 
        <input type="date" name="date_fin" required> 

        <label>Enseignant superviseur :</label> 
        <input type="text" name="encadrement" required> 

        <input type="submit" value="Envoyer"> 
        <input type="reset" value="Annuler"> 
    </form> 

</body> 
</html>
