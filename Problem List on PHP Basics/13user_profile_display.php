<?php
$userProfile = [
    "firstName" => "John",
    "lastName" => "Doe",
    "email" => "john.doe@example.com",
    "city" => "New York"
];

foreach ($userProfile as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
?>
