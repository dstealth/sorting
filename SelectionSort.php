<?php
define("SIZE", 10);

//$a = array(32, 47, 33, 48, 76, 75, 81, 70, 93, 96);
//$a = array(32, 47, 33, 48, 76, 75, 81, 70, 93, 96);
$a=array();
for ($i = 0; $i < SIZE; $i++) {
    $a[$i] = rand(1, 99);
    echo $a[$i] . " ";
}
//print_r($a);
?>
    <br/>
    <br/>
    <br/>
<?php
for ($i = 0, $min = 0; $i < SIZE; $i++, $min=$i) {
    for ($j = $i+1; $j < SIZE; $j++) {
        if ($a[$j] < $a[$min]) {
            $min = $j;
//            echo $min . " <br/>";
        }
    }
//    echo "a[i]=" . $a[$i] . " -- a[min]=" . $a[$min] . " <br/>";
    $k = $a[$i];
    $a[$i] = $a[$min];
    $a[$min] = $k;
//    echo "a[i]= $a[$i] -- a[min]=$a[$min] <br/>";
//    echo "========================<br/>";
}
//var_dump($a);
print_r($a);
?>