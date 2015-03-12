<?php

    class NumbersToWords {

      function convert($numbers) {
        $final = "";
        $values = ['1' => "one", '2' => "two", '3' => "three", '4' => "four", 'five' => "five", '6' => "six", '7' => "seven", '8' => "eight", '9' => "nine"];
        $teens = ['10' => "ten", '11' => "eleven", '12' => "twelve", '13' => "thirteen", '14' => "fourteen", '15' => "fifteen", '16' => "sixteen", '17' => "seventeen", '18' => "eighteen", '19' => "nineteen"];

        $num_array = str_split($numbers);
        for ($i = 0; $i < count($num_array); $i++) {
          $number = $num_array[$i];
          echo "<p>number = " . $number . "</p>";
          if ($i == 0) {
            echo "<p>i = " . $i . "</p>";
            // test for teens
            if (count($num_array) > 1) {
              $teen_combiner = $num_array[0] . $num_array[1];
              echo "<p>teen_combiner = " . $teen_combiner . "</p>";
              if (in_array($teen_combiner, array_keys($teens))) {
                echo "<p>inner teens!</p>";
                $final .= $teens[$teen_combiner];
                $i++;
              }
              // test for a pure zero
            } elseif (count($num_array) == 1 && $num_array[0] == 0) {
              $final = "zero";
              // just a regular single digit singles value
            } else {
              $final .= $values[$number];
            }
            // tens position
          } elseif ($i == 1) {
            $final = $teens[$number * 10] + $final;
          }
        }
        echo "<p>final = " . $final . "</p>";
        return $final;
      }
    }

    $test = new NumbersToWords;
    $test->convert(17);
 ?>
