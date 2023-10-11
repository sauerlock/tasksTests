<?php
function leapyear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST['year'])) {
    $inputYear = intval($_POST['year']);
    $result = leapyear($inputYear) ? "a leap year" : "not a leap year";
    echo "$inputYear is $result.";
}
?>

