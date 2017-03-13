<?php
/**
 * Created by PhpStorm.
 * User: Jim
 * Date: 13/03/2017
 * Time: 14:35
 */


$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
foreach ($students as $prenoms => $age) {
    echo $prenoms ." à la valeur " . $age . "<br/>";
}
{
    echo "</br>" . "Moyenne " . array_sum($students)/count($students);
}


?>