<?php
namespace App;
use Exception;

 class Calculator {

    public function add($num1,$num2){
        if(!is_numeric($num1) || !is_numeric($num1))
        throw new Exception("Non numeric input not allowed");
        return $num1 + $num2;
    }
 }
 
?>