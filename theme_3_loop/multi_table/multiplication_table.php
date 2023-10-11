<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Multiplication Table</h2>
    <form method="post">
        Enter a number: <input type="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if (isset($_POST['number'])) {
        $inputNumber = intval($_POST['number']);
        echo "<h3>Multiplication Table for $inputNumber</h3>";
        echo "<table border='1'>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $inputNumber * $i;
            echo "<tr><td>$inputNumber x $i</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
