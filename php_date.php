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


    <?php
    
        echo time() ;

        echo '<br />' ;
        // $time = mktime (date("H"), date("i"), date("s"), date("n"), date("j"), date("Y") ) ;
        echo date('D m Y H:i:s') ;

        echo '<br />' ;
        $date = new DateTime('+3 hours') ;
        var_dump($date) ;
        
        $date2 = new DateTime('-3 hours') ;
        $interval = $date->diff($date2) ;
        var_dump($interval->days);

    ?>
    
</body>

</html>