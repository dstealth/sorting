<?php
define("COUNT", 10);
$a = array();
for ($i = 0; $i < COUNT; $i++) {
    $a[$i] = rand(1, 99);
    echo $a[$i] . " ";
} ?>
    <br/>
<?php

$newa = array();

$max = 1;
for ($j = 0; $j < COUNT; $j++) {
    for ($i = 0; $i < COUNT; $i++) {
        if ($a[$i] > $a[$max]) {
            $max = $i;
        }
    }
    $newa[$j] = $a[$max];
    $a[$max] = -1;
}
var_dump($newa);
?>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
<?php

$b = array();
for ($x = 0; $x < COUNT; $x++) {
    $b[$x] = rand(1, 99);
    echo $b[$x] . " ";
} ?>
    <br/>
<?php
$MAX = 0;


for ($x = 0; $x < COUNT; $x++) {
    for ($y = $x; $y < COUNT; $y++) {
        if ($b[$y] > $b[$MAX]) {
            $MAX = $y;
        }
//        echo +$x . " " . $b[$x] . " | " . +$y . " " . +$b[$y] . " | " . +$MAX . " " . $b[$MAX] . "<br/>";
    }
//    echo "x $b[$x] $x || MAX $b[$MAX] $MAX <br/>";
    $k = $b[$x];//Что это за херня? Почему у тебя присваввание наоборот, в Си такого не было!!!!
    $b[$x] = $b[$MAX];
    $b[$MAX] = $k;
}
var_dump($b);


?>