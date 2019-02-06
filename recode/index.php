<!doctype html>
<html>
<head>
<title>Koodi taaskasutamine</title>
<style>
* {
    padding: 0;
    margin: 0;
    font-family: Verdana, Geneva, sans-serif;
}
#pais {
	background-color: #6C9;
	line-height: 100px;
}
#jalus {
	background-color: #F93;
	line-height: 30px;
}
</style>
</head>
<body>
<menu>
<a href="index.php">Avaleht</a>
<a href="index.php?leht=portfoolio">Portfoolio</a>
<a href="index.php?leht=kaart">Kaart</a>
<a href="index.php?leht=kontakt">Kontakt</a>
</menu>
<?php
if(!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
    if($kontroll==true){
        include($leht.'.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
} else {
    ?>
<h2> Avaleht </h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
</p>
<?php
    }
?>
<footer id="jalus">
    <p>No kopirait</p>
  </footer>
</body>
</html>