# 🤡 Projet Le Joker
> Ce projet dois permettre aux étudiants de pouvoir transformer ce projet statique en dynamique
> Ajouter tout une partie fonctionnel que dans ce prototype de page n'existe pas.
> 🚀 [Voir la publication](https://giusmili.github.io/Le-joker/)
> 


## Tester les itérations

```php
    const table_actors = [
                array(
                    "nom"=>"De Niro"
                    ),
                array(
                    "nom"=>"Al Pacino"
                    )
                    
        ];
        
    $premierTableau = table_actors[0];

    foreach ($premierTableau as $key => $index) {
        print "$key : $index\n";
    }
```
> Méthode de travail pour une performance optimale

## 🤡 Explication :
* config.php : Ce fichier établit la connexion à la base de données cine via PDO.
* userModel.php : La fonction getUsers() récupère les données de la table user sans utiliser de classes.
* userController.php : Le contrôleur appelle la fonction getUsers() et passe les données à la vue.
* index.php : Point d'entrée de l'application, charge le contrôleur qui orchestre tout.

![cover](./public/asset/giusmili-lead-developer.svg)