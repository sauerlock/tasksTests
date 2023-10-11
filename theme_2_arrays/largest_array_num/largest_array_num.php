<?php
function largestNumber($numbers) {
    if (empty($numbers)) {
        return null; 
    }
    $largest = $numbers[0]; 
    foreach ($numbers as $number) {
        if ($number > $largest) {
            $largest = $number; 
        }
    }
    return $largest;
}

if (isset($_POST['numbers'])) {
    $inputNumbers = explode(",", $_POST['numbers']);
    $largestNumber = largestNumber($inputNumbers);
    echo "The largest number in the array is: $largestNumber";
}
?>
