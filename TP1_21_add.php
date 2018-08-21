<?php
    if(!isset($_SESSION['num_member'])) {
        $_SESSION['num_member']=$num_member;
    } else {
        $num_member = $_SESSION['num_member'];
    }
    if ($num_member < 15) {
        $num_member++;
    }elseif ($num_member >= 15) {
        echo "La salle est pleine.";
    }
    $_SESSION['num_member'] = $num_member;
?>