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
        <input type="text" name="field1">
        <input type="text" name="field2">
        <select name="logement">
            <option value="">--</option>
            <option value="1">Maison</option>
            <option value="2">Appartement</option>
            <option value="3">Villa</option>
        </select>
        <input type="submit">
    </form>

    <br />
    <br />

    <?php
    // STORE THE DATA FROM GET AND POST
        echo '<pre>' ;
        var_dump($_GET); // to GET data from a submit ?!
        var_dump($_POST);
        $my_var=$_POST ;
        var_dump($my_var);
        echo '<pre>';

    // MAKE A QUICK IF STATEMENT
        // if(
        //     isset($_POST['field1']) &&
        //     $_POST['field1'] == 'test'
        // )
        // {
        //     echo 'Vous avez tapé test !';
        // }
        // else {
        //     echo 'Je ne comprend pas';
        // }
    
    // FILL A TABLE
        // $tab = [];
        // $tab[]='Nantes';
        // $tab[]='Rennes';
        // $tab[]='Paris';
        
    // MULTI D TABLE
        $villes = [];
        $villes['France'] = [
            'Nantes',
            'Rennes',
            'Paris',
        ];
        $villes['Espagne'] = [
            'Madrid',
            'Barcelona',
            'Alicante',
        ];

        echo "<pre>";
        var_dump($villes);
        echo "</pre>";
        ?>
        
    
</body>

</html>