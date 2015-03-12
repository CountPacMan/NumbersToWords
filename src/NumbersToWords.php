<?php

    class NumbersToWords {

      function convert($numbers) {
        $final = "";
        $values = ['0' => 'zero', '1' => "one", '2' => "two", '3' => "three", '4' => "four", 'five' => "five", '6' => "six", '7' => "seven", '8' => "eight", '9' => "nine", '10' => "ten"];

        $num_array = str_split($numbers);
        $position = count($num_array) - 1;
        for ($position; $position >= 0; $position--) {
          $number = $num_array[$position];
          if ($position == 0) {
            $final .= $values[$number];
          }
        }
        return $final;
      }
    }

    // $test = new NumbersToWords;
    // $test->convert(1);
 ?>


 <!-- elseif ($number == $key) {
   // echo "entered! ";
   $final = $value . $final; -->
