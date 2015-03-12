<?php

    class NumbersToWords {

      function convert($numbers) {
        $final = [];
        $values = ['1' => "one", '2' => "two", '3' => "three", '4' => "four", '5' => "five", '6' => "six", '7' => "seven", '8' => "eight", '9' => "nine"];
        $teens = ['10' => "ten", '11' => "eleven", '12' => "twelve", '13' => "thirteen", '14' => "fourteen", '15' => "fifteen", '16' => "sixteen", '17' => "seventeen", '18' => "eighteen", '19' => "nineteen"];
        $tens = ['2' => "twenty", '3' => "thirty", '4' => "fourty", '5' => "fifty", '6' => "sixty", '7' => "seventy", '8' => "eighty", '9' => "ninety"];

        $num_array = str_split($numbers);
        $last_digit = count($num_array) - 1;
        for ($i = $last_digit; $i >= 0; $i--) {
          $number = $num_array[$i];
          echo "<p>number = " . $number . "</p>";
          // test for teens
          if ($i == $last_digit && count($num_array) > 1 && $num_array[$last_digit -1] == 1) {
            echo "<p>i = " . $i . "</p>";
            $teen_combiner = $num_array[$last_digit - 1] . $num_array[$last_digit];
            echo "<p>teen_combiner = " . $teen_combiner . "</p>";
            echo "<p>inner teens!</p>";
            array_push($final, $teens[$teen_combiner]);
            $i--;
          }   // test for a pure zero
          elseif (count($num_array) == 1 && $num_array[$last_digit] == 0) {
              array_push($final, "zero");
              // just a regular single digit singles value
          }
          elseif ($i == $last_digit && $number != 0) {
            array_push($final, $values[$number]);
          }
            // tens position and not teen
          elseif ($i == $last_digit - 1 && $number != 1) {
            echo "<p>number at 2x = " . $number . "</p>";
            echo "<p>final at 2x = " . var_dump($final) . "</p>";
            array_push($final, $tens[$number]);
            echo "<p>final at 2x after = " . var_dump($final) . "</p>";
          }
           // hundreds position
          else if ($i == $last_digit - 2) {
            array_push($final, $values[$number] . " hundred");
          }
        }
        $final = array_reverse($final);
        $final = implode(" ", $final);
        echo "<p>final = " . $final . "</p>";
        return $final;
      }
    }

    $test = new NumbersToWords;
    $test->convert(555);
 ?>
