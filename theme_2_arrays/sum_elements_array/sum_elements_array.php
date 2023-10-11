<?php
function calculateSum($array) {
    $sum = array_sum($array);
    return $sum;
}

if (isset($_POST['numbers'])) {
    $inputNumbers = explode(",", $_POST['numbers']);
    $inputNumbers = array_map('intval', $inputNumbers); // Convert input to integers
    $totalSum = calculateSum($inputNumbers);
    echo "The sum of the elements in the array is: $totalSum";
}
?>
