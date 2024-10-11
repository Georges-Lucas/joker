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
    // $instance_user = new film();
    $instance_histoire = new histoire();
?>