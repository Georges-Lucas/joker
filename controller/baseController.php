<?php

    # varaibles
  

    # connection bdd avec principe de responsabilité

    require_once './model/userModel.php';
        
    $users = getUsers($conn);
    
  

class User{
        public $title = "Le Joker";
        static $info ="Informations sur le film Le Joker";

    # function supp
        public function storyline(){
            $story = ["title"=>"Histoire du film", 
                    "storyline"=>"En 1981, à Gotham City, Arthur Fleck, un comédien raté, sombre dans la folie
                    après une série de tragédies et d'humiliations. Incapable de se connecter aux
                    autres et désespéré par l'absence de sens dans sa vie, Arthur se transforme
                    progressivement en Joker, une figure de chaos et de violence, qui devient 
                    une icône pour les citoyens les plus marginalisés."];
            return $story;      
        }
       
    }

   

    # instance
   
    $newtitle = new User();

        
        
     


