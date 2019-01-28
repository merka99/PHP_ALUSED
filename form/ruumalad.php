<?php
function keraRuumala($r1){
    return 4/3 * 3.14 * pow($r1, 3);
}
function koonuseRuumala ($r2, $k1) {
    return 1/3 * 3.14 * $r2 * $k1;
}
function silindriRuumala($r3,$k2){
    return 3.14 * $r3 * $k2;
}
$r1 = $_GET['r1'];
echo keraRuumala($r1);
echo '<br>';
$r2 = $_GET['r2'];
$k1 = $_GET['k1'];
echo koonuseRuumala($r2,$k1);
echo '<br>';
$r3 = $_GET['r3'];
$k2 = $_GET['k2'];
echo silindriRuumala($r3,$k2);
