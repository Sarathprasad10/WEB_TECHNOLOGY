<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">enter the Year</label>
    <input type="text" id= "year" name="year" > 
    <button>submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["year"])) 
    {
        
        function isLeapYear($year) 
        {
            return ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0));
        }
        $year = $_POST["year"];
        if (isLeapYear($year)) 
        {
            echo "$year is a leap year.";
        } 
        else 
        {
            echo "$year is not a leap year.";
        }
    }
?>

</body>
</html>