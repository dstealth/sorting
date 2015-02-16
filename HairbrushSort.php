<?php
define ("SIZE", 10);
define("REDUCTION_FACTOR", 1.247);

function Q($j)
{
    $b = $j;
    $var1 = (SIZE * (pow(REDUCTION_FACTOR, (-$b))));
    $var2 = (int)$var1;
    return $var2;
}

echo Q(0) . "<br/>";
echo Q(1) . "<br/>";
echo Q(2) . "<br/>";
echo Q(3) . "<br/>";
echo Q(4) . "<br/>";
echo Q(5) . "<br/>";
echo Q(6) . "<br/>";
echo Q(7) . "<br/>";
echo Q(8) . "<br/>";
echo Q(9) . "<br/>";

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
    for ($j = 0; $j < (SIZE - 1); $j++) {
        if ($j > Q($j)) {
            if ($a[$j] > ($a[Q($i)+$j])) {
                $k = $a[$j];
                $a[$j] = $a[$j+Q($i)];
                $a[$j+Q($i)] = $k;
            }
        }
        else {
            if ($a[$j] > $a[$j + 1]) {
                $k = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $k;
            }
        }
    }
}
var_dump($a);
?>