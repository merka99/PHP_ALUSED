<?php
echo date('d.m.Y G:i', time());
echo '<br>';
$a=array("Monday"=>"esmaspäev", "Tuesday"=> "teisipäev", "Wednesday"=>"kolmapäev", "Thursday"=> "neljapäev", "Friday"=>"reede", "Saturday"=>"laupäev", "Sunday"=>"pühapäev");
echo $a[date("l")];
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
echo '<br>';
echo date("d");
echo ".";
echo $eesti_kuud[date('n')];
echo ' ';
echo date('Y');
echo ' ';
echo $a[date("l")];
echo '<br>';
echo ceil((strtotime("24. june 2019")-strtotime("now"))/60/60/24);

$sp1 = mktime(0,0,0,8,12, 1999);
$sp2 = mktime(0,0,0,11,6, 1980);
echo '<br>';
$metshein = date('d.m.Y', $sp2);
$merle = date('d.m.Y', $sp1) ;
echo $merle;
echo '<br>';
echo $metshein;
echo '<br>';
echo 'Vanem on: ';
if ($metshein<$merle){
    echo 'metshein';
}
else {
    echo 'merle';
}
echo '<br>';
echo 'vahe aastates on: ';
echo floor((strtotime($merle)-strtotime($metshein))/60/60/24/365);
echo '<br>';
echo 'maailmalõpuni on sekundeid: ';
echo strtotime('29. february 2016')-strtotime('now');
$vanus = floor((strtotime('12. august 2020')-strtotime($merle))/60/60/24/365);
echo '<br>';
echo ("Vanus 12. augustil 2020: ");
echo $vanus;
echo "<br>";
if($vanus %5==0){
    echo 'on juubel';
} else {
    echo 'ei ole juubel';
}
date_default_timezone_set('Europe/Tallinn');
echo '<br>';
$aeg = date('G', time());
if ($aeg>=8&&$aeg<13) {
    echo date('G:i', time());
    echo " ";
    echo 'Tere hommikust!';
} elseif ($aeg>13&&$aeg<17){
    echo date('G:i', time());
    echo " ";
    echo 'Tere päevast!';
} else {
    echo date('G:i', time());
    echo " ";
    echo 'Tere õhtust!';
}
?>