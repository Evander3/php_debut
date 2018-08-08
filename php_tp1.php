<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>C'est MA page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    Dat's my project

    <form action="" method="POST">
        <input type="text" name="nom_ville">
        </select>
        <input type="submit">
    </form>

    <br />

    <?php

        // TABLES
        $villes =  [
            'nantes'=> ['nom' => 'Nantes'   , 'pays' => 'France', 'habitants' => '284970'           ],
            'paris' => ['nom' => 'Paris'    , 'pays' => 'France', 'habitants' => '2,244 millions'   ],
            'test'  => ['nom' => 'Test'     , 'pays' => 'DevEnv', 'habitants' => '18,2 millions'    ],
        ];

        $raw_input = trim($_POST['nom_ville']) ;
        $input = strtolower($raw_input);

        if (empty($input)) {
            echo nl2br("Ce nom n'est pas valide.\n") ;
        }
        else  {
            if( !empty($villes[$input]) ) {
                echo nl2br("La ville de {$villes[$input]['nom']} est située en {$villes[$input]['pays']} et compte {$villes[$input]['habitants']} habitants.\n");
            }
            else {
                echo nl2br("Je ne comprend pas.\n");
            }
        }
    
    ?>
    
</body>

</html>