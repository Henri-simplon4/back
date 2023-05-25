<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Listes</title>
</head>
<body class="container">
<header>
    <div class="row">
      <div class=" offset-md-1 col-md-2 col-sm-4 pt-2 image">
      <a href="../index.php"><img src="../images/logo.png" alt="" width=100px heigth=100px></a>
      </div>
      <div class="offset-md-3 col-md-6 offset-sm-2 col-sm-6 pt-3">
        <h1>Université Joseph KI-ZERBO</h1>
        <h3>UFR/SDS</h3>
      </div>
    </div>
  </header>
<?php
    // Connexion à la base de données
    include('connexion.php');
    // Requête SQL pour sélectionner les noms, prenoms, dates de naissance et mots de passe des utilisateurs
    $sql = "SELECT nom, prenom, date_de_naissance, date_adhesion, genre, tuteur FROM etudiants";

    // Exécution de la requête
    $stmt = $conn->query($sql);

    // Traitement des résultats
    echo "<table class='table'>";
    echo "<tr class='bg-secondary text-white'>
    <th scope='col' class=''>Nom</th>
    <th scope='col'>Prenom</th>
    <th scope='col'>Date de naissance</th>
    <th scope='col'>Date adhesion</th>
    <th scope='col'>Genre</th>
    <th scope='col'>Tuteur</th>
    </tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr class='trr'>";
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
    <div class="row">
        <div class="col">
          <p>Copyright.co</p>  
        </div>
        <div class="col">
          <p>Email: josehpkyzerbo@gmail.com</p>  
        </div>
        <div class="col">
          <p>Ouagadougou, Burkina Faso</p>  
        </div>
    </div>
</footer>
</body>
</html>