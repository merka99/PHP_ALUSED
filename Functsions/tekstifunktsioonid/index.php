<?php
$nimi = $_GET['nimi'];
$eesn = $_GET['eesnimi'];
$prn = $_GET['perenimi'];
echo ucfirst(strtolower($nimi));
echo '<br>';
$i = 0;
$sona = '';
while($i<strlen($nimi)){
    $sona = $sona . $nimi[$i] . '.';
    $i += 1;
}
echo $sona;

echo '<br>';
$roppus = array('noob','pede','juku');
$asendus = '****';
echo str_replace($roppus, $asendus, $nimi);
echo '<br>';
$taht = array('ä','ö','ü','õ');
$uustaht = array('a','o','y','o');
$tekst = strtolower($eesn . '.' . $prn . '@hkhk.edu.ee');
echo str_replace($taht,$uustaht, $tekst);

?>