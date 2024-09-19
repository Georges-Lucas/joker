<?php
    $_versionPhp = phpversion();
    $lang = ["fr","en","it"];
    $styleCss = "./public/css/style.css";
    $_date = date('Y-m-d');
    $_years = new DateTime("Y");

    class User{
        public $title = "Le joker";
        static $info ="Informations sur le film Le Joker";
    }

    #instance
    $newtitle = new User();
?>