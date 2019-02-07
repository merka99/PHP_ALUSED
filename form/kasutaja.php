<h1>Andmed </h1>
<?php

$tulemus = $_GET['nimi'];
$date = = DateTime::createFromFormat('U.u', microtime(TRUE));

echo 'Sinu nimi väikeste tähtedega: ';
echo strtolower($tulemus);
echo $date($date -> format('Y-m-d H:i:s.u'));
?>