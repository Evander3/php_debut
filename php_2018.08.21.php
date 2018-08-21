<?php
declare(strict_types=1);


// premier test :

// function printTest(string $name): string {
//     return strtoupper($name);
// }

// echo printTest('mamax');

// verouillage de typeage :

// function sum(int $a, int $b): ?int {
//     if ($a>0 && $b>0) {
//         return $a+$b;
//     } else {
//         return null;
//     }
// }
// echo '<br />' ;
// echo sum((int)2.4,(int)3.7);

// Portée des variables :

// $a=1;
// $b=2;
// function add(int $a, int $b):void{
//     global $a, $b;
//     $a=$a+$b;
// }
// add($a, $b);
// echo $a;
// die;

// Fonction d'incrémentation :

// function increment() {
//     // static $a = sqrt(121);
//     static $a = 0;
//     $a = sqrt(10);
//     echo $a;
//     var_dump($a);
//     // $a++;
// }
// increment();

// Fonction call :

// $call = 'showMyName';
// $call(); // cet appel vaut la même chose que showMyName() ...

// $call = function($a) {
//     $a = $a*$a;
//     echo $a;
// };
// $call(5);
// echo '<pre>';
// var_dump($call);
// echo '</pre>';

// Operateur use :
// $twig = 'template !';
// $showMyName = function ($name) use ($twig) {
//     var_dump($twig);
// }
// $showMyName('Mamax');

// Session :
// session_start();
// $reload = 0;
// if(!isset($_SESSION['reload'])) {
//     $_SESSION['reload']=$reload;
// } else {
//     $reload = $_SESSION['reload'];
// }
// $reload++;
// echo $reload;
// $_SESSION['reload'] = $reload;

// Switch :
$integer = 3;
switch ($integer) {
    case 1 :
        echo 'Vous avez tapé 1';
        break;
    case 2 :
        echo 'Vous avez tapé 2';
        break;
    case 3 :
        echo 'Vous avez tapé 3';
        break;
    default :
        echo 'No comprende';
        // break; // break inutile ici
}
?>