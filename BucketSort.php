<?php
define("SIZE", 10);
define("RandMIN", 0);
define ("RandMAX", 99);

function myRandom($max, $min, $accuracy){
    return rand($min * $accuracy, $max * $accuracy) / $accuracy;
} // Функция для получения значения с точкой

$a = array(); // Создаю масив случайных чисел размером SIZE
for ($i = 0; $i < SIZE; $i++) {
    $a[$i] = myRandom(RandMIN, RandMAX, 10);
    echo $a[$i] . " ";
}
$minIndex=$maxIndex=1;
// Нахожу минимальное и максимальное значение массива
for ($i=0; $i<SIZE; $i++){
    if ($a[$i]<$a[$minIndex]) $minIndex=$i;
    if ($a[$i]>$a[$maxIndex]) $maxIndex=$i;
}


function InsertionSort($a) // Функция сортировки вставками
{
    for ($i = 1; $i < SIZE; $i++) {
        for ($j = $i; $j != 0; $j--) {
            if ($a[$j] < $a[$j - 1]) {
                $k = $a[$j];
                $a[$j] = $a[$j - 1];
                $a[$j - 1] = $k;
            }
        }
    }
    return $a;
}





// Нахожу количество ведер исходя из условного шага CONDITIONAL_STEP
define("CONDITIONAL_STEP",5);
$numBuckets=($a[$maxIndex]-$a[$minIndex])/CONDITIONAL_STEP;


// Функция которая создает ведра
function Bucket($numBuckets, $minEl){
    $BucketArr=array();
    for ($i=1;$i<=$numBuckets; $i++){
        $BucketArr[($minEl+(CONDITIONAL_STEP)*$i)]=array();
    }
return $BucketArr;

}



var_dump(Bucket($numBuckets, $a[$minIndex]));
//$buckets = Bucket($numBuckets, $a[$minIndex]);
//for ($i=0;$i<SIZE; $i++){
//    //$a[$i]=$buckets;
//    $buckets[];
//}


?>



















<!--    <h3>--><?php //echo RandMIN ?><!-- - --><?php //echo (int)((RandMAX)/2);?><!--:</h3>-->
<?php
//for ($i = 0; $i < SIZE; $i++) {
//    if ($a[$i] > 0 && $a[$i] < (RandMAX/2)) {
//        var_dump(InsertionSort($a));
//    }
//} ?>
<!--    <br/>-->
<!--    <br/>-->
<!--    <h3>--><?php //echo (int)((RandMAX)/2);?><!-- - --><?php //echo RandMAX;?><!--:</h3>-->
<?php
//for ($i = 0; $i < SIZE; $i++) {
//    if ($a[$i] >= (RandMAX/2) && $a[$i] < RandMAX) {
//        var_dump(InsertionSort($a));
//    }
//}
?>


<?php


//var_dump($a);

?>