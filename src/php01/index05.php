<?php
 $Fizz = "Fizz";
 $Buzz = "Buzz";
 $FizzBuzz = "FizzBuzz";

for ($a = 1; $a <= 50 ; $a++){

    if ($a % 3 == 0 ){
    echo $Fizz;
    }
    elseif ($a % 5 == 0){
    echo $Buzz;
    }
    elseif ($a % 15 == 0){
    echo $FizzBuzz;
    }
    else {
    echo $a;
    }
}

   