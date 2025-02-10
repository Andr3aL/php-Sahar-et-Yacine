<?php

$title = "Les tableaux";
$titre = "Les tableaux en PHP (array())";
$paragraphe = "Un tableau en PHP est en fait une carte ordonnée. Une carte est un type qui associe des valeurs à des clés. Ce type est optimisé pour différentes utilisations ; il peut être considéré comme un tableau, une liste, une table de hachage, un dictionnaire, une collection, une pile, une file d'attente et probablement plus. On peut avoir, comme valeur d'un tableau, d'autres tableaux, multidimensionnels ou non.";

require_once("inc/header.inc.php");
?>



<main class="container px-5 border">
    
    <div class="row">
        <h2 class="text-center my-5">1 - Déclaration des tableaux</h2>
        <div class="col-sm-12 col-md-6 mt-5">


            <h3 class="text-primary text-center">Méthode 1</h3>
            <p>La première façon pour déclarer un tableau est en utilisant la fonction <span>array()</span> : <br></p>

            <code>

                $tableau = array('valeur1', 'valeur2', 'valeur3', 'valeur4');

            </code>


        </div>

        <div class="col-sm-12 col-md-6 mt-5">


            <h3 class="text-primary text-center">Méthode 2</h3>
            <p>La deuxième façon pour déclarer un tableau est en utilisant la syntaxe courte avec les crochets <span>[]</span> : <br></p>

            <code>

                $tableau = ['valeur1', 'valeur2', 'valeur3', 'valeur4'];

            </code>


        </div>

    </div>

    <div class="row">
        <h2 class="text-center my-5">2 - Afficher les éléments d'un tableau</h2>

        <div class="col-sm-12">
            <ul>
                <li>Pour afficher une valeur d'un tableau, on écrit son indice entre une paire de crochets après le nom du tableau.</li>
                    <?php
                        // Déclaration du tableau
                    $liste = array('Oumar', 'Andrea', 'Alexandre', 'Fayçal');
                    // echo $liste; // Erreur de type Array to string conversion, car on ne peut pas afficher directement un tableau

                    echo '<pre>';
                    var_dump($liste); // Affiche le contenu du tableau avec les types
                    echo '</pre>';
                    //on entoure le var_dump avec des balises pre afin de garder un format lisible
                        /**
                         * Le var_dump renvoie toutes les informations sur ce qui se trouve dans telle ou telle variable:
                         *  - il donne en premier lieu le type de variable et si c'est un tableau, le nom d'éléments contenu
                         *  - Les éléments avec leurs type et leur longueur
                         * Cette fonction de débug sera utilisé pour vérifier si on a bien récupéré les informations dans une variable.
                         */

                    $liste2 = ['Andrei', 'Islem', 'Ouarda', 'Mamadou'];

                    echo '<pre>';
                    var_dump($liste2); // Affiche le contenu du tableau avec les types
                    echo '</pre>';

                    ?>
                <li>

                            Affichez "Bonjour Islem" depuis votre PHP grâce au tableau créé. 
                            <?php

                            echo"<p class = 'alert alert-success w-25'> Bonjour $liste2[1] </p>";

                            ?>

                </li>
            </ul>
        </div>






    </div>







</main>





<?php
require_once("inc/footer.inc.php");

?>