<?php
$capitals = [
    "USA" => "Washington D.C.",
    "Japan" => "Tokyo",
    "Bangladesh" => "Dhaka"
];
$country = "Japan";
$userGuess = "Tokyo";

if (isset($capitals[$country])) {
    if (strtolower($userGuess) == strtolower($capitals[$country])) {
        echo "Correct! The capital of $country is " . $capitals[$country] . ".";
    } else {
        echo "Wrong! The capital of $country is " . $capitals[$country] . ".";
    }
}
?>
