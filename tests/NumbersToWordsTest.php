<?php

    require_once "src/NumbersToWords.php";

    // Specs:
    // Takes number and returns written form, such as "1" will return "one"

    //Spec 1: "1" = "one"
    //Spec 2: "2" = "two"
    //Spec 3: "10" = "ten"
    //Spec 4: "13" = "thirteen"
    //Spec 4: "20" = "twenty"
    //Spec 4: "21" = "twenty one"


    class NumbersToWordsTest extends PHPUnit_Framework_TestCase
    {

        function test_NumbersToWords_singleDigit()
        {
            //Arrange
            $test_NumbersToWords = new NumbersToWords;
            $numbers = 1;

            //Act
            $result = $test_NumbersToWords->convert($numbers);

            //Assert
            $this->assertEquals("one", $result);
        }

        function test_NumbersToWords_singleDigit2()
        {
            //Arrange
            $test_NumbersToWords = new NumbersToWords;
            $numbers = 2;

            //Act
            $result = $test_NumbersToWords->convert($numbers);

            //Assert
            $this->assertEquals("two", $result);
        }

        function test_NumbersToWords_10isTen()
        {
            //Arrange
            $test_NumbersToWords = new NumbersToWords;
            $numbers = 10;

            //Act
            $result = $test_NumbersToWords->convert($numbers);

            //Assert
            $this->assertEquals("ten", $result);
        }

        function test_NumbersToWords_13isThirteen()
        {
            //Arrange
            $test_NumbersToWords = new NumbersToWords;
            $numbers = 13;

            //Act
            $result = $test_NumbersToWords->convert($numbers);

            //Assert
            $this->assertEquals("thirteen", $result);
        }

        function test_NumbersToWords_20isTwenty()
        {
            //Arrange
            $test_NumbersToWords = new NumbersToWords;
            $numbers = 20;

            //Act
            $result = $test_NumbersToWords->convert($numbers);

            //Assert
            $this->assertEquals("twenty", $result);
        }
    }

?>
