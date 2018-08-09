<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>C'est MA page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    A quelle date avez-vous commencé à coder ?

    <form action="" method="POST">
        Jour<input type="text" name="cod_since_jour">
    <br />
        Mois<input type="text" name="cod_since_mois">
    <br />
        Année<input type="text" name="cod_since_annee">
    <br />
        </select>
        <input type="submit">
    </form>

    <br />

    <?php

        echo'<pre>';
        var_dump($_POST);
        echo'</pre>';

        // $raw_jour = trim($_POST['cod_since_jour']) ;
        // $raw_mois = trim($_POST['cod_since_mois']) ;
        // $raw_annee = trim($_POST['cod_since_annee']) ;
        $raw_jour = $_POST['cod_since_jour'] ;
        $raw_mois = $_POST['cod_since_mois'] ;
        $raw_annee = $_POST['cod_since_annee'] ;
        $input_jour = strtolower($raw_jour);
        $input_mois = strtolower($raw_mois);
        $input_annee = strtolower($raw_annee);

        // $dat_time = mktime ($hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] );
        $then = "$raw_jour $raw_mois $raw_annee" ;
        echo $then ;
        $now = date('d m Y') ;
        echo $now ;

        echo'<pre>';
        var_dump($now);
        echo'</pre>';

        
        $interval = $now->diff($then);
        var_dump($interval->days);
        echo $interval;

    
    ?>
    
</body>

</html>