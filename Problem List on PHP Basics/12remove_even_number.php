<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$oddNumbers = [];
foreach ($numbers as $num) {
    if ($num % 2 != 0) {
        $oddNumbers[] = $num;
    }
}
print_r($oddNumbers);
?>