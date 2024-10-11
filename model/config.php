<?php
# variables
$_versionPhp = phpversion();
$lang = ["fr","en","it"];
$styleCss = "public/css/style.css";
$_date = date('Y-d-m');
$_years = new DateTime();
$navigator =  $_SERVER["PHP_SELF"];
$sign = $_SERVER["SERVER_SIGNATURE"];

   # la bdd
    $host = "localhost";
    $db_name = "cine";
    $username = "root";
    $password = "";
    
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("set names utf8");
        } catch (PDOException $e) {
            die("Connection impossible : " . $e->getMessage());
    }
 
    # ci-dessous un procédé plus simple
    
    /* try{
        $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $_bdd = new PDO('mysql:host=localhost; 
                dbname=cine','root','', 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
        
                 $_response = $_bdd->query(
                    'SELECT * FROM `user` WHERE 1 ORDER BY id ASC '
                );
                       
                       

        while($_data = $_response->fetch()){
         
           
           #  on fait un test sur la bdd avant de l'afficher
            print "<pre>";
            
            print_r($_data["firstname"]);
            
            print "</pre>"; 
           
    ;
        }
        
        $_response->closeCursor(); //ici se termine l'appelle par la méthode fetch()

     }

     catch(Exception $e){
        die("Error Data base de votre base ".$e->getMessage());
         //en cas d'érreur on affiche un message
} */