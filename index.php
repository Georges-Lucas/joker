<?php
    include_once __DIR__ . '/controller/baseController.php';
    include_once __DIR__ . '/template/header.inc.php';
?>
<body>
    <!-- En-tête de la page -->
    <header>
        <h1>
            <span aria-hidden="true">🤡</span>Le Joker
        </h1>
    </header>

    <!-- Contenu principal -->
    <main>
        <!-- Section Affiche du film -->
        <section class="movie-poster">
            <img 
                src="https://wave.fr/images/1916/07/joker-3-bonnes-raisons-aller-voir-film-cinema-aujourdhui.jpg" 
                alt="Affiche du film Le Joker"
                loading="lazy">
        </section>

        <!-- Section Storyline -->
        <section class="storyline">
            <?php 
                $film = $instance_histoire->storyline();
            ?>
            <h2><?= $film['title']?></h2>
            <p>
                <?= $film['resumé']?>
            </p>
        </section>

        <!-- Section Cast -->
        <section class="cast">
            <h2>Cast Principal<?= $navigator?></h2>
            <ul>
                <?php
                    // $instance_user = new Nom();
                    $actors = $instance_user->actorsInfo();
                    // foreach ($actors as $key => $index){
                    //     echo "<li><strong>";
                    //     foreach ($index as $keys => $values){
                    //         if($keys == "role"){
                    //             echo "</strong> $values</li>";
                    //         }else{
                    //             echo "$values ";
                    //         }
                            
                            
                    //     }
                    // }
                ?>
                <?php foreach($actors as $role):?>
                    <ul>
                        <li>
                            <strong><?= $role['prenom']." ".$role['nom'] ?>
                            </strong> <?= $role['role'] ?>
                        </li>
                    
                    </ul>
                <?php endforeach;?>
                <!-- <li><strong>Joaquin Phoenix </strong>dans le rôle d'Arthur Fleck (Joker)</li>
                <li><strong>Robert De Niro</strong> dans le rôle de Murray Franklin</li>
                <li><strong>Zazie Beetz</strong> dans le rôle de Sophie Dumond</li>
                <li><strong>Frances Conroy</strong> dans le rôle de Penny Fleck</li> -->
            </ul>
        </section>

        <!-- Section Date de Sortie -->
        <section class="release-date">
            <h2>Date de Sortie</h2>
            <p><time datetime="<?= $_date?>"><?= $_years->format('d/M/Y')?></time></p>
        </section>

        <!-- Bouton vers AlloCiné -->
        <section class="trailer-button">
            <a href="https://www.allocine.fr/video/player_gen_cmedia=19582354&cfilm=255710.html" target="blank">
                <span class="material-symbols-outlined" aria-hidden="true">
                    video_file
                </span>Voir la bande-annonce
            </a>
        </section>
    </main>

    <!-- Pied de page -->
    <?php
    include_once __DIR__ . '/template/footer.inc.php';
    ?>
    <!-- <pre>
        <?php
            // print_r($_SERVER)
        ?>
    </pre> -->
</body>
</html>
