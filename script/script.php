<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>script</title>
</head>
<body>
    <h1 class="feli">Félicitation!!!</h1>
</body>
</html>
<?php
// formulaire soumis
if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $date_adhesion = $_POST['date_adhesion'];
    $genre = $_POST['genre'];
    $tuteur = $_POST['tuteur'];

    include('connexion.php');

        
        // execution
        $sql = "INSERT INTO etudiants (nom, prenom, date_de_naissance, date_adhesion, genre, tuteur) VALUES (:nom, :prenom, :date_de_naissance, :date_adhesion, :genre, :tuteur)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':date_de_naissance', $date_de_naissance);
        $stmt->bindParam(':date_adhesion', $date_adhesion);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':tuteur', $tuteur);
        $stmt->execute();

        echo '<h2 class="info"> Vos informations ont été bien enregistré avec succès.</h2>';
        echo '<button class="retour"><a href="../index.php">Retour accueil</a></button>';
        echo '<button class="liste"><a href="../script/liste.php">Liste</a></button>'; 
        
}
?>


