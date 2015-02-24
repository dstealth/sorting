<?php
define("SIZE", 50);

$a = array();
for ($i = 0; $i < SIZE; $i++) {
    $a[$i] = rand(0, 99);
    echo $a[$i] . " ";
}
?>
    <br/>
    <br/>
    <br/>
<h3>1 - 49:</h3>
<?php
for ($i = 0; $i < SIZE; $i++) {
    if ($a[$i] > 0 && $a[$i] < 50) {
        echo $a[$i] . " ";
    }
} ?>
    <br/>
    <br/>
    <h3>50 - 99:</h3>
<?php
for ($i = 0; $i < SIZE; $i++) {
    if ($a[$i] >= 50 && $a[$i] < 100) {
        echo $a[$i] . " ";
    }
}
?>