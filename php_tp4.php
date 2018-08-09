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
    Nom de la Ville :
    <form action="" method="POST">
        <input type="text" name="nom_ville">
        </select>
        <input type="submit">
    </form>
    <br />

    <?php
        // TABLES
        $villes =  [
            'nantes'=> ['lieu' => 'dans l\'Ouest', 'habitants' => '284970'],
            'rennes'=> ['lieu' => 'dans l\'Ouest', 'habitants' => '215366'],
            'paris' => ['lieu' => 'dans le Centre', 'habitants' => '2244456'],
            'toulouse' => ['lieu' => 'dans le Sud', 'habitants' => '1330954'],
            'marseille' => ['lieu' => 'dans le Sud', 'habitants' => '1752398'],
            'lyon' => ['lieu' => 'quelque part', 'habitants' => '2291763'],
            'alencon' => ['lieu' => 'dans le trou du cul du monde', 'habitants' => '23000'],
        ];
        $pop_min = 60000;
        $raw_input = trim($_POST['nom_ville']) ;
        $input = strtolower($raw_input);

        if (empty($input)) {
            echo nl2br("Ce nom n'est pas valide.\n") ;
        }
        else  {
            if( !empty($villes[$input]) ) {

                if (isset($input,$villes[$input])) {

                    $disp_ville = ucfirst($input);
                    $disp_pop = number_format($villes[$input]['habitants'],0,',',' ');
                    if ($villes[$input]['lieu']=='dans l\'Ouest' && $villes[$input]['habitants']>$pop_min) {
                        echo nl2br("Je connais bien cette ville! Effectivement, c'est grand!\n");
                    } else {
                        echo nl2br("Je connais pas cette ville ! Je suis pas très fort en géographie ...\n");
                    }
                    echo nl2br("\nLa ville de $disp_ville est située {$villes[$input]['lieu']} et compte $disp_pop habitants.\n");
                } else {
                    echo "La ville n'est pas dans la base de données";
                }

            } else {
                echo nl2br("Je ne comprend pas.\n");
            }
        }
    ?>
</body>
</html>