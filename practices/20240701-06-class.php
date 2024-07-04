<?php
header('Content-Type: text/plain');

class Person{
  public $name;
  public $age;
  private $mobile = '';

  public function __construct($name='',$age=0,$mobile=''){
    $this->name = $name;
    $this->age = $age;
    $this->mobile = $mobile;
  }
  function getMobile(){
    return $this->mobile;
  }
  function setMobile($mobile){
    $this->mobile = $mobile;
  }
}

$a = new Person();
$a->name = 'tom';
$a->age = 18;
$a->setMobile('0912345678');

print_r($a);

$b = new Person('mary',16,'');

print_r($b);