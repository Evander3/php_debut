<?php
    if(!isset($_SESSION['num_member'])) {
        $_SESSION['num_member']=$num_member;
    } else {
        $num_member = $_SESSION['num_member'];
    }
    if ($num_member>0) {
        $num_member--;
    }
    $_SESSION['num_member'] = $num_member;
?>