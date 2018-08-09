<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>C'est MA page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
</head>

<body>
    <?php

    // inclure d'autres fichiers
    include "php_date.php";
    //identique à :
    require "php_date.php"; // moins souple que le include
    // lance le script de la page include autant de fois qu'il est déclaré
    require_once "php_date" ;
    // affiche le fichier une seule fois

    // boucle à eviter
    // while(true) {
    //     echo "Ca Passe !";
    // }
    // die;

    // boucle for
    for($i=0;$i<5;$i++) {
        echo $i.' --';
    }
    die;

    /// structure ternaire
    $isOpen = true;
    $maison= $isOpen?'Je rentre':'Je reste à la porte';
    echo $maison;
    die;



    // tests logiques
    $isOpen=false;
    $hasKeys=false;

    if($isOpen||$hasKeys) {
        echo"OK je rentre!";
    }
    die;


    // opérateur comparateurs avec objets référencés
    $obj1 = new stdClass();
    $obj2 = new stdClass();
    var_dump($obj1==$obj2); // return true
    var_dump($obj1===$obj2); // return false
    $obj1 = new stdClass();
    $obj2 = $obj1;
    var_dump($obj1==$obj2); // return true
    var_dump($obj1===$obj2); // return true
    die;
    
    
    // opérateur comparateurs !
        // == test égalité
        // >=
        // <=
        // et === test egalité stricte :
    var_dump(false===0);
    die;

    // si function est déclarée avec $var, la valeur de $var
    // n'est pas modifiée, avec &$var, la référence de $var est modifiéée
        function test(&$var): void {
            $var = 'AB';
            // return $var;
        }

        $test = 34;
        test($test);
        var_dump($test);
        die;

        // par défaut les scalaires ne sont pas liés et on peut les référencés 
        // avec &
        $city = &$ville; // avec city et ville en scalaires
        // on peut casser une référence avec un unset()

        // les objets (class ...) sont en revanche par défaut référencés
        // on peut les "délier" en créant une copie avec "clone" 
        $city = clone $ville; // avec city et ville en objets


        $ville = new stdClass();
        var_dump(is_scalar($ville)) ;
        die;


        $ville = 'nantes';
        echo $ville;
        $city = &$ville;
        echo '<br />';
        echo $city;
        echo '<br />';
        $city='rennes';
        echo $city;
        echo '<br />';
        echo $ville;
        die;




    
    

    ?>
</body>
</html>