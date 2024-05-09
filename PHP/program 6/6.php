<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Converter</title>
</head>
<body>
    <form action="" method="post">
        <label for="num">Enter the Number:</label>
        <input type="text" id="num" name="num">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["num"])) {
        function decToBinary($n)
        {
            $binaryNum = array();
            $i = 0;
            while ($n > 0) {
                $binaryNum[$i] = $n % 2;
                $n = (int)($n / 2);
                $i++;
            }
            for ($j = $i - 1; $j >= 0; $j--)
                echo $binaryNum[$j];
        }

        $n = $_POST["num"];
        if (is_numeric($n)) {
            echo "Binary of $n is: ";
            decToBinary($n);
        } else {
            echo "Please enter a valid number.";
        }
    }
    ?>
</body>
</html>
