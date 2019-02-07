<h1>Andmed </h1>
<?php
$tulemus = $_GET['nimi'];

echo 'Sinu nimi väikeste tähtedega: ';
echo strtolower($tulemus);
echo '<br>';
$date = DateTime::createFromFormat('U.u', microtime(TRUE));
echo 'Sisselogimise aeg: ';
echo ($date->format('Y-m-d H:i:s.u'));
?>