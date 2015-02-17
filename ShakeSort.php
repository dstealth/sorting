<?php
define ("SIZE", 10);
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
    for ($j = 0; $j < (SIZE - $i - 1); $j++) {
        if ($a[$j] > $a[$j + 1]) {
            $k1 = $a[$j];
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $k1;
        }

        for ($p = (SIZE - $i - 1); $p > $i; $p--) {
            if ($a[$p - 1] > $a[$p]) {
                $k2 = $a[$p - 1];
                $a[$p - 1] = $a[$p];
                $a[$p] = $k2;
            }
        }
    }
}
var_dump($a);
?>