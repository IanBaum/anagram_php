<?php
    class Anagram{

        function generateAnagram($start, $target){
            $split_start = str_split($start);
            $split_target = str_split($target);
            sort($split_start);
            sort($split_target);
            if ($split_start === $split_target) {
                echo "These words are anagrams!";
                return true;
            } else {
                echo "These words are not anagrams!";
                return false;
            }
        }
    }
?>
