<?php
define("SIZE", 10);
$a = array();
for ($i = 0; $i < SIZE; $i++) {
    $a[$i] = rand(1, 99);
    echo $a[$i] . " ";
}
?>
    <br/>
    <br/>
<?php
for ($i = 0; $i < SIZE; $i++) {
    for ($j = 0; $j < (SIZE-1); $j++) {
        if ($a[$j] > $a[$j + 1]) {
            $k = $a[$j];
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $k;
        }
    }
}
var_dump($a);
?>