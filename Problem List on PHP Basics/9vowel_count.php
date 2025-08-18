<?php
$text = "Hello World";
$vowels = 0;
$chars = str_split(strtolower($text));
foreach ($chars as $ch) {
    if ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u') {
        $vowels++;
    }
}
echo 'The string "' . $text . '" has ' . $vowels . ' vowels.';
?>