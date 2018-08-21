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
    <!-- Nom de la Ville : -->
    <!-- <form action="" method="POST">
        <input type="text" name="nom_ville">
        </select>
        <input type="submit">
    </form> -->
    <br />

    <?php
    

        $begin = new DateTime( '2017-01-01' );
        $end = new DateTime(  );
        // $end = $end->modify( '+1 day' ); 

        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($begin, $interval ,$end);

        foreach($daterange as $date){
            echo $date->format("Ymd") . "<br>";
        }
    ?>
</body>
</html>