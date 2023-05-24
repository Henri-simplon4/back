<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Document</title>
</head>
<body class="container">
<?php
    // Connexion à la base de données
    include('connexion.php');
    // Requête SQL pour sélectionner les noms, prenoms, dates de naissance et mots de passe des utilisateurs
    $sql = "SELECT nom, prenom, date_de_naissance, date_adhesion, genre, tuteur FROM etudiants";

    // Exécution de la requête
    $stmt = $conn->query($sql);

    // Traitement des résultats
    echo "<table class='table table-hover'>";
    echo "<tr class='bg-secondary text-white'>
    <th scope='col' class=''>Nom</th>
    <th scope='col'>Prenom</th>
    <th scope='col'>Date de naissance</th>
    <th scope='col'>Date adhesion</th>
    <th scope='col'>Genre</th>
    <th scope='col'>Tuteur</th>
    </tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_de_naissance']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_adhesion']) . "</td>";
        echo "<td>" . htmlspecialchars($row['genre']) . "</td>";
        echo "<td>" . htmlspecialchars($row['tuteur']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
<footer>
<p>Copyrigth.co    Email: josehpkyzerbo@gmail.com    Ouagadougou, Burkina Faso</p>
</footer>
</body>
</html>