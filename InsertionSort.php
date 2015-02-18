<?php
define("SIZE", 10);

$a = array();
for ($i = 0; $i < SIZE; $i++) {
    $a[$i] = rand(1, 99);
    echo $a[$i] . " ";
}?>
<br/>
<br/>
<br/>

<?php
for ($i = 1; $i < SIZE; $i++) {
    for ($j = $i; $j != 0; $j--) {
        if ($a[$j] < $a[$j - 1]) {
            $k = $a[$j];
            $a[$j] = $a[$j - 1];
            $a[$j - 1] = $k;
        }
    }
}
var_dump($a);

?>