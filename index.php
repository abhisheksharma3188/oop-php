<?php
include_once 'calculator.php'; // include calculator.php
use CalculatorNamespace\MyCalculator; // namespace\class
use CalculatorNamespace\Calculate; // namespace\class
$object=new MyCalculator(); //create object of MyCalculator class

$number_1=3;
$number_2=2;

$addition=$object->add($number_1,$number_2); // calling add function using object
$subtraction=$object->subtract($number_1,$number_2); // calling subtract function using object
$multiplication=$object->multiplication($number_1,$number_2); // calling multiplication function using object

$object1=new Calculate(); // new object of extended class to access protected function
$division=$object1->division($number_1,$number_2); // calling division function using object

echo $addition.'<br>';
echo $subtraction.'<br>';
echo $multiplication.'<br>';
echo $division.'<br>';
?>
