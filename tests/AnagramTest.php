<?php
    require_once "src/Anagram.php";

    class generateAnagramTest extends PHPUnit_Framework_TestCase{

        function test_generateAnagram_isAnagram(){
            //Arrange
            $test_anagram = new Anagram();
            $start = "pears";
            $target = "spear";

            //Act
            $result = $test_anagram->generateAnagram($start, $target);

            //Assert
            $this->assertEquals(true, $result);
        }
    }
?>
