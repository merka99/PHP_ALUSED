<?php
$kasutajad = array (); //tühi massiiv
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, var'lucy');

$lisakasutajad = array('mark','george');//andmetega massiiv
echo '<pre>';
print_r($kasutajad);
print_r($lisakasutajad);
echo '</pre>';
var_dump($kasutajad);
