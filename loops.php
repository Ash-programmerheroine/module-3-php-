<?php
#Introduction to different types of loops
for($i = 0; $i <= 10; $i++){
   echo $i."\n";
}
echo PHP_EOL;


// $a = 0;
// // while ($a < 3) {
// //     $a++;
// //     echo $a;
// // }

do {
    $a++;
    echo $a;
} while ($a <= 10);// output :11, because it takes action before see the condition
echo PHP_EOL;


$array = array("banana"=>10, "apple"=>20, "Cherry"=>34);
foreach ($array as $key => $value) {
    echo "We have {$value}"." "."{$key}\n";
}