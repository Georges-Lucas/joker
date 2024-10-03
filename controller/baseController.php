<?php
    $_versionPhp = phpversion();
    $lang = ["fr","en","it"];
    $styleCss = "./public/css/style.css";
    $_date = date('Y-m-d');
    $_years = new DateTime("Y");
    $navigator = $_SERVER["HTTP_USER_AGENT"];

    class User{
        public $title = "Le Joker";
        static $info ="Informations sur le film Le Joker";
    }

    #instance
    $newtitle = new User();
    class film{
        // Your code here!
        public function actorsInfo(){
            $actors = [
                array(
                    "prenom"=>"Joaquin",
                    "nom"=>"Phoenix",
                    "role"=>"dans le rôle d'Arthur Fleck (Joker)"
                ),
                array(
                    "prenom"=>"Robert",
                    "nom"=>"De Niro",
                    "role"=>"dans le rôle de Murray Franklin"
                ),
                array(
                    "prenom"=>"Zazie",
                    "nom"=>"Beetz",
                    "role"=>"dans le rôle de Sophie Dumond"
                ),
                array(
                    "prenom"=>"Frances",
                    "nom"=>"Conroy",
                    "role"=>"dans le rôle de Penny Fleck"
                ),
                
            ];
            return $actors;
        }
    }
    class histoire{
        public function storyline(){
            $story=[
                "title" => "Histoire du film", 
                "resumé" => "En 1981, à Gotham City, Arthur Fleck, un comédien raté, sombre dans la folie
                    après une série de tragédies et d'humiliations. Incapable de se connecter aux
                    autres et désespéré par l'absence de sens dans sa vie, Arthur se transforme
                    progressivement en Joker, une figure de chaos et de violence, qui devient 
                    une icône pour les citoyens les plus marginalisés.",
            ];
            return $story;
        }
    }
    $instance_user = new film();
    $instance_histoire = new histoire();
?>