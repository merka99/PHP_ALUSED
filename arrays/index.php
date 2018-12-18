<?php
$kasutajad = array (); //tühi massiiv
$kasutajad[] = 'alice';
$kasutajad[] = 'bob';
array_push($kasutajad, var:'lucy');

$lisakasutajad = array('mark','george');//andmetega massiiv
$kasutajadkokku = count($kasutajad);
for ($i = 0; $i < 3; $i++){
    echo $kasutajad[$i]. '<br>';
}
array_shift($kasutajad);
$kasutajadkokku = count($kasutajad);
for ($i = 0; $i < 3; $i++) {
    echo $kasutajad[$i] . '<br>';
}

$uuedKasutajad = array_merge($kasutajad, $lisakasutajad);
for($i = 0; $i < count($uuedKasutajad); $i++) {
    echo $uuedKasutajad[$i]. '<br>';
}
echo '<hr';
foreach ($uuedKasutajad as $kasutaja) {
    echo $kasutajad.'<br>';
}