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

        echo '<h2>informations enregistre avec succès.</h2>';
        echo '<p><a href="../index.php">retour</a>';
            
    
}
?>


