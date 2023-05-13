<?php
$servername = 'localhost';
    $username ='root';
    $password = '';
    $dbname = 'directeur';
    try{
    // connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // mode erreur
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
        catch(PDOException $e){
            echo "erreur : " .$e->getMessage();
        }
        ?>