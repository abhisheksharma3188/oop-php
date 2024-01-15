<?php
namespace CalculatorNamespace; //namespace declaration

class MyCalculator{ // class MyCalculator
    const ADDITION_STRING = 'The sum is : ';
    const SUBTRACTION_STRING = 'The subtraction is : ';
    const MULTIPLICATION_STRING = 'The multiplication is : ';
    const DIVISION_STRING = 'The division is : ';

    public function add($num1,$num2){ //public function. It can be accessed from anywhere
        $result=$num1+$num2;
        $output_string=self::ADDITION_STRING.$result;
        return $output_string;
    }

    public function subtract($num1,$num2){ //public function. It can be accessed from anywhere
        $result=$num1-$num2;
        $output_string=self::SUBTRACTION_STRING.$result;
        return $output_string;
    }

    public function multiplication($n1,$n2){ //public function. It can be accessed from anywhere
        $result=$this->multiply($n1,$n2); // calling private function from within class
        return $result;
    }

    private function multiply($num1,$num2){ //private function. It cannot be accessed from outside class
        $result=$num1*$num2;
        $output_string=self::MULTIPLICATION_STRING.$result;
        return $output_string;
    }

    protected function divide($num1,$num2){ //protected function. It cannot be accessed from outside class but can be accessed using extended class
        $result=$num1/$num2;
        $output_string=self::DIVISION_STRING.$result;
        return $output_string;
    }
}

class Calculate extends MyCalculator{ // class Calculate that extends class MyCalculator
    public function division($n1,$n2){
        $result=$this->divide($n1,$n2);// calling protectred function from extended class
        return $result;
    }
}

?>
