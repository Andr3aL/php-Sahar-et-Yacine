<!doctype html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Les conditions</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top" >
        <div class="container-fluid">
        <a class="navbar-brand" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="01_index.php">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="02_bases.php">Les bases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="03_variables_constantes.php">Les variables et les constantes</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="04_conditions.php">Les conditions en PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="05_boucles.php">Les boucles en PHP</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="06_inclusions.php">Les importations des fichier</a>
                    </li>
                    
                </ul>
        
            </div>
        </div>
    </nav>
    <header class="p-5 m-4 bg-light rounded-3 border ">
            <section class="container py-5">
                <h1>Les conditions en PHP</h1>
                <p class="col-md-12 fs-4">Les conditions sont un chapitre clé en PHP comme dans les autres langages de programmation. Par exemple, lorque l'on fera une page de connexion, on aura la condition suivante: sSI l'adresse existe dans la BDD et SI le mdp correspond à l'adresse, l'utilisateur est connecté  SINON il reste sur la page avec une messega d'erreur</p>
            </section>
    </header><!-- fin header -->
        <main class="container-fluid px-5">
        <div class="row">
            <div class="col-sm-12 col-md-6">

                <h2>La boucle while</h2>
                <p>La boucle est, comme en JS, une boucle qui permet d'éxécuter un code TANT QUE la condition d'entrée est toujours remplie.</p>


                <?php

                    $a = 0; // Initialisation de la variable à 0 => valeur de départ de la boucle

                    while($a < 5){ //On boucle tant que $a est strictement inférieur à 5

                        echo "<p>Tour n° $a</p>";// on affiche à quel tour on se trouve
                        $a++; // On incrémente la valeur de la variable pour que la condition d'entrée devienne false à un moment donné

                    }


                // Exercice :
                // à l'aide d'une boucle while, vous affichez les années de 1920 à 2025 dans un menu déroulant.

                    // $annee = 1920;

                    // while($annee < 2025) {

                    //     echo "<select class=\"form-select\" aria-label=\"Default select example\">
                    //         <option selected>Open this select menu</option>
                    //         <option value=\"$annee\">$annee</option>
                    //         </select>";
                    //     $annee++;

                    // }



                    // CORRECTION

                    $i = 1920;

                    echo '<form>
                            <select class="form-select form-select-lg" name="" id="">';

                            while($i <= 2025) {
                                echo "<option value=\"$i\">$i</option>";
                                $i++;
                            }

                    echo '</select>
                        </form>';

                ?>

                    <!-- Exercice bonus : faire la même chose dans l'autre sens, de 2025 à 1920 -->

                    <?php $j = 2025; ?>
                    

                    <form>
                        <select class="form-select form-select-lg" name="" id="">';

                            <?php
                                while($j >= 1920) {
                                    echo "<option value=\"$j\">$j</option>";
                                    $j--;
                                }
                            ?>

                        </select>
                    </form>


            </div>
        </div>
           
        
        </main>
    <footer>
        <div class="d-flex justify-content-evenly align-items-center bg-dark text-white p-3">
        <a class="nav-link" target="_blank" href="https://www.php.net/manual/fr/langref.php">Doc PHP</a>
        <a class="nav-link" href="01_index.php"><img src="assets/img/logo.png" alt="logo php"></a>
        <a class="nav-link" target="_blank" href="https://devdocs.io/php/">DevDocs</a>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>
</html>