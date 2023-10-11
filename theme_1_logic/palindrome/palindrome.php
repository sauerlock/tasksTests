<?php
function palindrome($input) {
    $input = strtolower(str_replace(' ', '', $input));
    $inputReverse = strrev($input);
    return $input === $inputReverse;
}

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $result = palindrome($input) ? "a palindrome" : "not a palindrome";
    echo "'$input' is $result.";
}
?>

