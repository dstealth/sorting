<?php
define("ARR_SIZE", 10); // Размер массива

// Функция, которая создает рандомное число с точкой
function MyRandom($min, $max, $accuracy = 100)
{
    return rand($min * $accuracy, $max * $accuracy) / $accuracy;
}


//echo MyRandom(0,100);

// Создаю массив и заполдняю его
$orignArr = array();
for ($i = 0; $i < ARR_SIZE; $i++) {
    $orignArr[$i] = MyRandom(0, 100);
    echo $orignArr[$i] . " | ";
}
echo "<br/>";
echo "<br/>";

// Функция для ведерной сортировки
function BucketSorting($orignArr)
{


// Вычисляю размер массива между минимальным и максимальным элементом
    for ($i = 1, $minIndex = $maxIndex = 0; $i < ARR_SIZE; $i++) {
        if ($orignArr[$i] < $orignArr[$minIndex]) $minIndex = $i;
        if ($orignArr[$i] > $orignArr[$maxIndex]) $maxIndex = $i;
    }
    $realSize = $orignArr[$maxIndex] - $orignArr[$minIndex];
//    echo "min el = " . $orignArr[$minIndex];
//    echo "<br/>";
//    echo "max el = " . $orignArr[$maxIndex];
//    echo "<br/>";
//    echo "real size = " . $realSize;

// Вычисляю количество ведерок, учитывая количество элементов в массиве $orignArr
// Допускаю что на каждые 10 элементов я отведу 4 ведерка, значит:
    $bucketNum = (ARR_SIZE / 10) * 4;
//    echo "<br/>";
//    echo "bucket num = " . $bucketNum;


// Вычисляю размер (границы) каждого ведерка
    $bucketSize = $realSize / $bucketNum;
//    echo "<br/>";
//    echo "bucket size = " . $bucketSize;


// Создаю ведра
    $bucketArr = array();
    for ($i = 1; $i <= $bucketNum; $i++) {
        $bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)] = array();
    }
//    echo "<br/>";
//    var_dump($bucketArr);


// Распихиваю элементы первоначального массива по ведрам и сортирую элементы каждого ведра
    for ($i = 1; $i <= $bucketNum; $i++) {
        $numElEachBucket = 0;
        for ($j = 0; $j < ARR_SIZE; $j++) {
            if (($orignArr[$j] <= ($orignArr[$minIndex] + ($bucketSize * $i)) && ($orignArr[$j] >= ($orignArr[$minIndex] + ($bucketSize * ($i - 1)))))) {
                $bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)][] = $orignArr[$j];
                $numElEachBucket++;
            }
        }
        // Делаю сортировку вставками для элементов каждого ведерка
        for ($x = 1; $x < $numElEachBucket; $x++) {
            for ($z = $x; $z != 0; $z--) {
                if ($bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)][$z] < $bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)][$z - 1]) {
                    $k = $bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)][$z];
                    $bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)][$z] = $bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)][$z - 1];
                    $bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)][$z - 1] = $k;
                }
            }
        }
//    echo "<br/>";
//    echo "Num el of each bucket".$numElEachBucket."<br/>";
    }
//echo "<br/>";
//echo "<pre>";
//print_r($bucketArr);

// Произвожу слияние всех ведерок в один массив $alredySortArr
    $alredySortArr=array();
    for ($i = 1; $i <= $bucketNum; $i++) {
//        $alredySortArr+=$bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)];
        $alredySortArr=array_merge($alredySortArr, ($bucketArr [$orignArr[$minIndex] + ($bucketSize * $i)]));
    }

    return $alredySortArr;
}

echo "<br/>";
echo "<br/>";
echo "<pre>";
print_r(BucketSorting($orignArr));
echo "<pre>";
?>
