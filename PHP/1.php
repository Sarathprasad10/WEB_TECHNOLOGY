<!DOCTYPE html>
<html>
<head>
    <title>Armstrong Number Checker</title>
</head>
<body>
    <h2>Armstrong Number Checker</h2>
    <form method="post" action="">
        Enter a number: <input type="text" name="number">
        <input type="submit" name="submit" value="Check">
    </form>

    <?php 
    // Function to check if a number is Armstrong or not
    function isArmstrong($number) 
    {
        // Calculate the number of digits
        $numDigits = strlen((string)$number);
        $sum = 0;
        $temp = $number;

        // Calculate sum of nth power of each digit
        while ($temp != 0) 
        {
            $digit = $temp % 10;
            $sum += pow($digit, $numDigits);
            $temp = (int)($temp / 10);
        }

        // Check if the number is Armstrong
        if ($number == $sum) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    }

    // Check if the form is submitted
    if(isset($_POST['submit'])) 
    {
        // Get the number entered by the user
        $number = $_POST['number'];

        // Check if the number is Armstrong or not
        if(is_numeric($number)) 
        {
            if (isArmstrong($number)) 
            {
                echo "$number is an Armstrong number.";
            } 
            else 
            {
                echo "$number is not an Armstrong number.";
            }
        } 
        else 
        {
            echo "Please enter a valid number.";
        }
    }
    ?>
</body>
</html>
