<?php
    # fonction pour la config
    require_once 'config.php';
    
    function getUsers($conn) {
        $query = "SELECT * FROM user"; # le corps de la requete SQL
        $statement = $conn->prepare($query);
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    