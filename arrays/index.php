<?php
$kasutajad = array (
    array (
        'alice',
        'Alice',
        'Liddell',
        'female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    )
);
for($i = 0; $i < count($kasutajad); $i++){
    foreach ($kasutajad[$i] as $info) {
        if ($kasutajad[$i][3] == 'female') {
            echo '<div style= "color: red">';
        } else {
            echo '<div style = "color: blue">';
        }
        echo $info . '<div>';
    }
    echo '<hr>';
}
$character = array ();
$character ['name'] = "bob";
$character ['occupation'] = "superhero";
$character ['age'] = 30;
$character ['special power'] = "x-ray vision";


echo $character['age'];
echo '<hr>';

$users = array ("Bert", "Sharon", "Betty", "harry");
echo $users[count($users) - 1];

echo '<hr>';

$users = array ("Bert", "Sharon", "Betty", "harry");
foreach ($users as $val) {
    print "$val<br>";
}
echo '<hr>';

$character = array ('name'=>"Bert",
    'occupation'=>"mida");
foreach ($character as $key=>$val )
{
    print "$key = $val<br>";
}
echo '<hr>';

$characters = array (
    array ('nimi'=>"pops",
        'occupation'=>"superhero",
        'vanus'=>24,
        'ala'=>"nähtamatu") ,
    array ('nimi'=>"popa",
    'occupation'=>"superman",
    'vanus'=>23,
    'ala'=>"hõljuv")
);
foreach ($characters as $val ) {
    foreach ($val as $key=>$final_val) {
        echo "$key: $final_val<br>";
    }
    print "<br>";
}
echo '<hr>';
$first = array("a", "b", "c","d","e","f");
$second = array_slice($first, 2, 3);
foreach ($second as $var)
{
    print "$var<br>";
}

print "<br>";
$an_array = array("x","a","f","c");
sort( $an_array);
foreach ( $an_array as $var )
{
    print "$var<br>";
}

echo "<br>";

$filmid = array (
    array ( 'filmi nimi'=>)
)