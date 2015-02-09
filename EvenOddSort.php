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
    <br/>
<?php
for ($i = 0; $i < SIZE; $i++) {
    for ($j = 0; $j < (SIZE-1); $j++) {
        if ($j % 2 != 0) {
            if ($a[$j] > $a[$j + 1]) {
                $k1 = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $k1;
            }
        } else {
            if ($a[$j] > $a[$j + 1]) {
                $k2 = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $k2;
            }
        }
    }
}
var_dump($a);
?>