     <?php
    if (isset($_POST['number'])) {
        $input = intval($_POST['number']);
        $isPrime = true;

        if ($input <= 1){
            $isPrime = false;
        } else {
            for ($i = 2;$i * $i <= $input; $i++) {
                if ($input % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
        }
        $result = $isPrime ? 'prime' : 'not prime';
        echo "$input is $result";

    }
?>
