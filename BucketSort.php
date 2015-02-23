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
    for ($j = 0; $j < SIZE; $j++) {
        if ($a[$i] > 0 && $a[$i] <= 25) {
            $a[$i];
        } elseif ($a[$i] > 25 && $a[$i] <= 50) {
            $a[$i];
        } elseif ($a[$i] > 50 && $a[$i] <= 75) {
            $a[$i];
        } else {
            $a[$i];
        }
    }
}
?>