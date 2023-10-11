<!DOCTYPE html>
<html>
<head>
    <title>Even Numbers</title>
</head>
<body>
    <h2>Even Numbers from 1 to 20:</h2>
    <ul>
        <?php
        for ($i = 2; $i <= 20; $i += 2) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>
</body>
</html>
