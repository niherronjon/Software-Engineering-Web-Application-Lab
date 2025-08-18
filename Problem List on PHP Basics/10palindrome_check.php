<?php
function checkPalindrome($word) {
    $lower = strtolower($word);
    if ($lower == strrev($lower)) {
        echo '"' . $word . '" is a palindrome.';
    } else {
        echo '"' . $word . '" is not a palindrome.';
    }
}

checkPalindrome("Racecar");
?>