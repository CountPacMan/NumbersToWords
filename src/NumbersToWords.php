<?php

    class NumbersToWords {

      function convert($numbers) {
        $final = "";
        $values = ['0' => 'zero', '1' => "one", '2' => "two", '3' => "three", '4' => "four", 'five' => "five", '6' => "six", '7' => "seven", '8' => "eight", '9' => "nine", '10' => "ten"];

        $num_array = str_split($numbers);
        foreach ($num_array as $number) {
          foreach ($values as $key => $value) {
            // echo "first base ";
            // echo "<p> key is " . $key . "</p>";
            // echo "<p> number is " . $number . "</p>";
            // echo "<p> value is " . $value . "</p>";
            if ($number == $key) {
              // echo "entered! ";
              $final .= $value;
            }
          }
        }
        // echo $final;
        return $final;
      }
    }

    // $test = new NumbersToWords;
    // $test->convert(1);
 ?>
