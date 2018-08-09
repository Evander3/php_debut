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
    Dat's my project

    <form action="" method="POST">
        <input type="text" name="nom_ville">
        <!-- <input type="text" name="field2"> -->
        <!-- <select name="logement">
            <option value="1">Maison</option>
            <option value="2">Appartement</option>
            <option value="3">Villa</option> -->
        </select>
        <input type="submit">
    </form>

    <br />
    <br />

    <?php

        // TABLES
        $villes =  [
            'nantes' => ['pays' => 'France', 'habitants' => '284970'],
            'paris' => ['pays' => 'France', 'habitants' => '2,244 millions'],
            'test' => ['pays' => 'DevEnv', 'habitants' => '18,2 millions'],
        ];

        $input = strtolower(trim($_POST['nom_ville'])) ;
        $output = ucfirst($input);


        echo'<pre>';
        var_dump($villes);
        echo'</pre>';
        // $string_villes=implode(', ',$villes);
        function implode_table($n)
            {
                return(implode(', ',$n));
            }
        $string_villes=array_map(implode_table,$villes);
        echo'<pre>';
        var_dump($string_villes);
        echo'</pre>';
        // if (empty($input)) {
        //     echo nl2br("Ce nom n'est pas valide.\n") ;
        // }
        // else  {
        //     if( !empty($villes[$input]) ) {
        //         echo nl2br("La ville de $output est située en {$villes[$input]['pays']} et compte {$villes[$input]['habitants']} habitants.\n");
        //     }
        //     else {
        //         echo nl2br("Je ne comprend pas.\n");
        //     }
        // }
    
    ?>
    
</body>

</html>