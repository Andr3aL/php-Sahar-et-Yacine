<?php

$title = "Les fonctions";
$titre = "Les fonctions en PHP";
$paragraphe = "";

require_once("inc/header.inc.php");

?>


<main class="container px-5 border border-dark">
    <div class="row">
        
        <h2 class="mt-5">1 - Les fonctions prédéfinies</h2>
        <ul>
            <li> Une fonction prédéfinie permet de réaliser un traitement spécifique prédéterminé dans le language PHP</li>
        </ul>
        <!-- Les fonctions prédéfinies des chaînes de carcatères -->
        <div class="col-sm-12 mt-5">
            <h3 class="text-primary text-center mb-5">Les fonctions prédéfinies des chaînes de carcatères </h3>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ul>
                        <!-- https://www.php.net/manual/en/function.rtrim.php -->
                        <li><span>substr()</span> : permet d'extraire une partie d'une chaine de caractère</li>
                        <li><span>strpos()</span>: permet de récuperer la position d'un caractère dans une chaîne de caractère </li>
                        <li><span>strlen()</span> : permet de récupérer la taille d'une chaîne de carctére</li>
                        <li><span>substr_replace()</span> : permet de remplacer un segment de la chaîne</li>
                        <li><span>substr_ireplace()</span>: Version insensible à la casse de str_replace()</li>
                        <li><span>str_contains()</span> : permet de vérifier si la chaîne contient un mot particulier</li>
                        <li><span>str_starts_with()</span> : permet de vérifier si une chaîne commence par une sous-chaîne donnée</li>        
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul>
                        <li><span>str_ends_with()</span> : permet de vérifier si une chaîne se termine par une sous-chaîne donnée</li>
                        <li><span>trim()</span> : permet de supprimer les espaces avant et après une chaîne de caractère </li>
                        <li><span>strtolower()</span> : permet de retourner la chaîne en miniscule</li>
                        <li><span>strtoupper()</span> : permet de retourner la chaîne en majuscules</li>
                        <li><span>ucfirst()</span> : permet de mettre le premier caractère en majuscule. </li>
                        <li><span>lcfirst()</span> : permet de mettre le premier caractère en miniscule. </li>
                    </ul>
                </div>
            </div>

            <?php

                $maChaine = "bonjour j'aime le PHP !!";

                // J'affiche un caractère ou une lettre de la chaîne de caractères ci-dessus : 

                echo $maChaine[3].'<br>';
                // Affiche j

                // Modifier un caractère de la chaine : 

                $maChaine[0] = 'B';
                echo $maChaine.'<br>';
                // Affiche Bonjour j'aime le PHP !!

                // Extraire une partie de la chaine de caractères : 

                $nvlChaine = substr($maChaine, 0, 9);
                // Cette fonction prend en paramètre la variable, le point de départ et la longueur de la chaine souhaitée
                echo $nvlChaine.'<br>';

                // Exercice
                // Récupérer une partie du texte (de l'indice 0 à l'indice 40) et remplacer la partie enlevée avec ce morceau de code : ...<a href="#"> Lire la suite </a>

                $texte = " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ducimus illum, sequi harum vitae tempore veritatis? Aliquam saepe quia delectus molestiae aut   repudiandae expedita autem, dolorem dolorum cum nesciunt dolor.
                Praesentium eum, molestiae autem quas numquam temporibus et cupiditate corporis quo eos deserunt magni non cum explicabo doloribus, fugiat illum necessitatibus maxime! Similique corporis veniam sunt consequuntur soluta est aliquam?
                Mollitia, sint incidunt est vero, blanditiis, officiis nostrum quisquam maxime rem sed at neque dolor magni ratione. Veniam, obcaecati. Voluptate consequuntur consectetur provident voluptates ex mollitia, saepe odio necessitatibus voluptas?
                Facilis, officia illo accusantium libero quidem laborum inventore, eveniet excepturi nobis neque doloremque itaque expedita voluptatum molestias hic quo facere! Aliquam suscipit deserunt perferendis nesciunt illo earum eaque quo excepturi.";

                // Correction

                $texteEnleve = substr($texte, 0, 40);
                echo "<p>$texteEnleve...<a href='#'> Lire la suite </a> </p>";

                // Récupérer la position d'un caractère dans une chaine de caractères : 

                echo "La position de la lettre H dans ma phrase est : ".strpos($maChaine, 'H') . '<br>';
                // Affiche position 19 dans la phrase bonjour j'aime le PHP !!

                // Attention : la fonction est sensible à la casse ! --> h n'est pas égal à H
                // var_dump($maChaine, 'h');

                // Récupérer la taille d'une chaîne de caractères : 

                echo strlen($maChaine).'<br>';

                // Remplacer une partie de la chaine : 

                $maChaine = str_replace('PHP', 'JS', $maChaine);
                // Les paramètres de la fonction : la chaine de caractère à changer, la chaine de caractère qui remplace, la variable à manipuler

                echo $maChaine.'<br>';

                $maChaine = str_ireplace('bonjour', 'Hello', $maChaine);

                echo $maChaine.'<br>';

                // Vérifier si la chaine contient un mot en particulier

                echo str_contains($maChaine, 'JS').'<br>';
                // Affiche 1 (cad true)
                var_dump(str_contains($maChaine, 'JS')).'<br>';
                // Affiche bool(true) directement grâce à var_dump()
                // Les paramètres : la variable qui contient la chaine et le mot à vérifier. Sensible à la casse
                // Le résultat est un boolean : true ou false (trouvé ou pas)

                echo '<br>';

                // Vérifier si la chaine commence par ce que vous lui passez dans les paramètres : 

                var_dump(str_starts_with($maChaine, 'Hel'));
                // Affiche bool(true)
                echo '<br>';

                // Vérifier si la chaine se termine par ce que vous lui passez dans les paramètres : 

                var_dump(str_ends_with($maChaine, '!'));
                // Affiche bool(true)
                echo '<br>';

                // Supprimer les espaces en début et fin de chaine : 
                $testTrim = "   Je suis une phrase avec des espaces au début et à la fin   ";
                echo $testTrim . '<br>';
                echo strlen($testTrim) . '<br>';
                // 64

                $nouveau = trim($testTrim);
                echo $nouveau . '<br>';
                echo strlen($nouveau) . '<br>';
                // 58

                ?>

        </div>

        <!-- Les fonctions prédéfinies des tableaux -->
         <div class="col-sm-12 mt-5">
            <h3 class="text-primary text-center mb-5">Les fonctions prédéfinies des tableaux </h3>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <ul>
                        <li><span>array_push()</span> : permet d'ajouter plusieurs valeurs à la fin d' un tableau</li>
                        <li class="alert alert-warning">Si on veut ajouter une seule valeur à la fin on utilise la syntaxe : <strong>$tableau[] = valeur_à_ajouter</strong> </li>
                        <li><span>array_unshift</span>: permet d'ajouter une valeur au début d'un tableau</li>
                        <li><span>array_pop</span>: permet de supprimer la dernière valeur d'un tableau</li>
                        <li><span>array_shift</span>: permet de supprimer la première valeur d'un tableau</li>
                        <li><span>unset()</span>: permet de supprimer un élément d'un tableau</li>
                        <li><span>shuffle</span>: permet de mélanger et réorganiser un tableau</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul>
                        <li><span>array_chunk</span>: permet de déviser un tableau en plusieurs parties et avec un nombre de valeurs à définir</li>
                        <li><span>count() / sizeof()</span> : permet de retourner la taille du tableau passé en paramètre.</li>
                        <li><span>in_array()</span>: permet de vérifier qu'une valeur est présente dans un tableau.</li>
                        <li><span>array_key_exists()</span> : permet de vérifier si une clé existe dans un tableau.</li>
                        <li><span>explode()</span> : permet de transformer une chaîne de caractère en tableau</li>
                        <li><span>implode()</span> : permet de Transformer un tableau en chaîne de caractères.</li>
                        <li><span>array_slice()</span> : permet de récuperer une partie d'un tableau </li>

                    </ul>
                </div>
            </div>

                <?php

                $tableau = ['Rouge', 'Rose', 'Violet'];

                // <pre> permet de mettre le tableau en meilleure forme pour mieux le lire
                echo '<pre>';
                var_dump($tableau);
                echo '</pre>';

                // Pour s'amuser, on peut créer une fonction dump pour éviter de répéter ce bout de code de débuggage tout le temps : 
                // function dump() {

                // }





                // Ajouter des valeurs à la fin du tableau : 
                array_push($tableau, 'Vert', 'Noir');

                echo '<pre>';
                // var_dump($tableau);
                echo '</pre>';





                // Ajouter des valeurs au début du tableau : 
                
                array_unshift($tableau, 'Gris', 'Jaune');

                echo '<pre>';
                // var_dump($tableau);
                echo '</pre>';





                // Supprimer la dernière valeur du tableau : 

                $valeurSupprimerFin = array_pop($tableau);
                // Supprime la valeur 'Noir' et je la stocke dans une variable

                echo $valeurSupprimerFin;

                echo '<pre>';
                // Tableau après la suppression de la dernière valeur
                // var_dump($tableau);
                echo '</pre>';




                // Supprimer la première valeur du tableau : 

                $valeurSupprimerDebut = array_shift($tableau);
            
                echo $valeurSupprimerDebut;

                echo '<pre>';
                // var_dump($tableau);
                echo '</pre>';

                // Mélanger un tableau : 

                shuffle($tableau);

                echo '<pre>';
                // var_dump($tableau);
                echo '</pre>';




                // Diviser un tableau en plusieurs parties : 

                $tableau2 = array_chunk($tableau, 3, true);
                // Ici on va diviser notre tableau en 2 tableaux, à partir de l'indice 3 du tableau original
                // Ici avec 'true' comme paramètre, nous permet de garder les mêmes indices aux valeurs du tableau d'orgine
                echo '<pre>';
                // var_dump($tableau2);
                echo '</pre>';




                // Compter les éléments dans un tableau : 

                $nbr1 = count($tableau);
                $nbr2 = sizeof($tableau);
                // sizeof ou count, c'est la même chose
                var_dump($nbr1);
                var_dump($nbr2);

                echo '<pre>';
                var_dump($tableau);
                echo '</pre>';




                // Vérifier une valeur dans un tableau : 

                $result = in_array('Bleu', $tableau);

                echo '<pre>';
                // var_dump($result);
                echo '</pre>';




                // Vérifier si une clé existe dans un tableau : 

                $result = array_key_exists(2, $tableau);

                echo '<pre>';
                var_dump($result);
                echo '</pre>';




                // Créer un tableau à partir de deux tableaux : 

                $couleur = ['Rouge', 'Orange', 'Turquoise'];
                echo '<pre>';
                var_dump($couleur);
                echo '</pre>';

                $all = [...$tableau, ...$couleur];
                // On décompose chacun des tableaux avec l'opérateur de décomposition (...)

                echo '<pre>';
                var_dump($all);
                // La variable $all contient le nouveau tableau indexé, créé à partir des 2 tableaux 
                echo '</pre>';

                // Je n'aurai pas le même résultat avec la synthaxe suivante : 
                $all1 = [$tableau, $couleur];

                echo '<pre>';
                // ça nous donne un tableau multidimentionel
                var_dump($all1);
                echo '</pre>';




                // Transformer une chaine de caractères en tableau :

                $maChaine2 = "Je me transforme en tableau";
                // Le séparateur , dans la chaîne, et la variable de la chaine à scinder
                $chaineEnTableau = explode(' ', $maChaine2);

                echo '<pre>';
                var_dump($chaineEnTableau);
                echo '</pre>';








                
                ?>

        </div>



    </div>



</main>



<?php
require_once("inc/footer.inc.php");
?>