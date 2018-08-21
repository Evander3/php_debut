<?php
    session_start();
    $num_member = 0;

    function check_highcap(int $num_member): int {
        // if ($num_member >= 15) {
        //     echo "La salle est pleine.";
        // }
        return $num_member;
    }

    function init_session_num(int $num_member): int {
        if(!isset($_SESSION['num_member'])) {
            $_SESSION['num_member']=$num_member;
        } else {
            $num_member = $_SESSION['num_member'];
        }
        return $num_member;
    }

    function increase(int $num_member): int {
        $num_member = init_session_num($num_member);
        $num_member++;
        $num_member = check_highcap($num_member);
        $_SESSION['num_member'] = $num_member;
        return $num_member ;
    }

    function decrease(int $num_member): int {
        $num_member = init_session_num($num_member);
        if ($num_member>0) {
            $num_member--;
        }
        $_SESSION['num_member'] = $num_member;
        return $num_member ;
    }

    function apply_operation(string $operation,int $num_member): int {
        // if(!isset($num_member)) {
        //     $num_member=0;
        //     return $num_member ;
        // }
        if ($operation=="Ajout") {
            $num_member = increase($num_member);
        }
        if ($operation=="Retrait") {
            $num_member = decrease($num_member);
        }
        return $num_member ;
    }

    if (!$_SESSION['num_member']) {
        $_SESSION['num_member']=0;
    }
    
    if (isset($_POST["chg_member"])) {
        $operation=$_POST["chg_member"];
        $num_member = apply_operation($operation,$_SESSION['num_member']);
        $_SESSION['num_member'] = $num_member;
        header('Location: index.php');
    }
    // echo'<pre>';
    // var_dump($_POST["chg_member"]);
    // echo'</pre>';
    // // echo $_POST["chg_member"] =="Ajout" ;
    // if ($_POST["chg_member"] ==="Ajout") {
    //     include 'TP1_21_add.php';
    // } elseif ($_POST["chg_member"] ==="Retrait") {
    //     include 'TP1_21_rem.php';
    // } 
    // // header('Location: index.php');
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TP5 - Compteur de participants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
</head>

<body>
    <form method="POST">
        Ajout d'un participant :
        <input type="submit" value="Ajout" name="chg_member">
    </form>
    <br />
    <form method="POST">
        Retrait d'un participant :
        <input type="submit" value="Retrait" name="chg_member">
    </form>
    
    <h2>Nombre de participants actuels :</h2>
    <center><h1><?php echo $_SESSION['num_member']; ?> </h1></center>
</body>
</html>