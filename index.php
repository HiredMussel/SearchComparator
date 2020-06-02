<?php

require_once 'linearSearch.php';
require_once 'binarySearch.php';
echo '<pre>';
$arr1 = [1,5,34,54,78,562,655,864,6543,6632,7777,7778,46266,24562];
sort($arr1);
 $before = microtime(true);

$value = 24562;

linearSearch($value, $arr1);

 $after = microtime(true);
 echo 'Time taken (linear):' . ($after-$before) . '<br><br><br>';

 $before = microtime(true);
 
binarySearch($value, $arr1, 0, count($arr1) - 1);
 
  $after = microtime(true);
  echo 'Time taken (binary):' . ($after-$before);
  echo '</pre>';