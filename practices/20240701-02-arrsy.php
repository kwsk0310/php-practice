<?php
header('Content-Type: text/plain');

$ar1=array(2,4,6);
$ar2=[2,4,6];
$ar3=array(
  'name' => 'David',
  'age' => 25,
);
$ar4=[
  'name' => 'David',
  'age' => 25,
  33,37,'bug',47,9
];


var_dump($ar4);

print_r($ar4);


for ($i= 0; $i< 42; $i++) {
  $ar5[$i] = $i+1;
}

shuffle($ar5);

echo implode(',', $ar5);
echo "\n";

foreach($ar4 as $k => $v) {
  echo "$k : $v \n";
}
echo "\n\n";

$ar2 = $ar1;
$ar3 = &$ar1;

$ar1[0] = 100;
print_r($ar1);
print_r($ar2);
print_r($ar3);