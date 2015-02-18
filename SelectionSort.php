<?php
define("SIZE", 10);

$a=array();
for ($i=0;$i<SIZE;$i++){
    $a[$i]=rand(1, 99);
    echo $a[$i] . " ";
}
?>
<br/>
<br/>
<br/>

<?php
$max=0;
for ($i=0; $i<SIZE; $i++){
    for ($j=1; $j<SIZE; $j++){
       if ($a[$j]<$a[$max]){
           $k=$j;
           $j=$max;
           $max=$k;
       }
    }
//    $max=-1;
}
var_dump($a);
?>