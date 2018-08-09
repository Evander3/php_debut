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
    A quelle date avez-vous commencé à coder ?

    <form action="" method="POST">
        Jour<input type="text" name="then_day">
    <br />
        Mois<input type="text" name="then_month">
    <br />
        Année<input type="text" name="then_year">
    <br />
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
            
            $then_day_raw = trim($_POST['then_day']);
            $then_month_raw = trim($_POST['then_month']);
            $then_year_raw = trim($_POST['then_year']);
            
            if (is_numeric($then_day_raw) && is_numeric($then_month_raw) && is_numeric($then_year_raw)
                && !empty($then_day_raw) && !empty($then_month_raw) && !empty($then_year_raw))
                {
                    $then = date_create($then_year_raw."-".$then_month_raw."-".$then_day_raw);
                    $now = date_create(date('Y-m-d'));
                    $interval = date_diff($then, $now);
                    $interval = $interval->format('%y Ans %m Mois %d Jour');
                    
                    echo "Vous avez appris à codé depuis $interval." ;
                }
                else {
                    echo "Les nombres entrés ne sont pas valides.";
                }
            ?>
    
</body>
</html>