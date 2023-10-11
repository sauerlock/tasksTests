
<?php
    function findLongestName($names) {
        if (empty($names)) {
            return null;
        }
        $namesArray = explode(",", $names);
        $longestName = $namesArray[0];
        foreach ($namesArray as $name) {
            $name = trim($name); 
            if (strlen($name) > strlen($longestName)) {
                $longestName = $name;
            }
        }

        return $longestName;
    }
    if (isset($_POST['names'])) {
        $inputNames = $_POST['names'];
        $longestName = findLongestName($inputNames);
        echo "The longest name in the list is: $longestName";
    }
    ?>