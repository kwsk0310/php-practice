<?php
header('Content-Type: text/plain');

$ar1=[
  'name' => '小新',
  'age' => '6',
  'hello'
];

$ar2='{"name":"小新","age":"6","0":"hello"}';

echo json_encode($ar1, JSON_UNESCAPED_UNICODE);
// echo "\n\n";
// var_dump(json_decode($ar2));
// echo "\n\n";
// var_dump(json_decode($ar2,true));