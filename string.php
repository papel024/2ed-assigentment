<?php

function countVowels($string) {
    
    $string = strtolower($string);
    
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelCount = 0;
    
    
    foreach (str_split($string) as $char) {
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}

function reverseString($string) {
    
    return strrev($string);
}

$strings = ["Hello", "World", "PHP", "Programming"];

$results = array_map(function($string) {
    
    $vowelCount = countVowels($string);
    
    $reversedString = reverseString($string);
    
    
    return "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString";
}, $strings);

foreach ($results as $result) {
    
    echo $result . "\n";
}

?>
