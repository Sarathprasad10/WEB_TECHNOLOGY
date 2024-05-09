<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
</head>
<body>
    <h1>Leap Year Checker</h1>
    <label for="year">Enter a year:</label>
    <input type="number" id="year" name="year">
    <button onclick="checkLeapYear()">Check</button>
    <p id="result"></p>

    <script>
        function isLeapYear(year) 
        {
            if ((year % 4 == 0 && year % 100 != 0) || year % 400 == 0) 
            {
                return true;
            } 
            else 
            {
                return false;
            }
        }

        function checkLeapYear() 
        {
            var yearInput = document.getElementById("year").value;
            var year = parseInt(yearInput);

            if (isNaN(year)) 
            {
                document.getElementById("result").textContent = "Please enter a valid year.";
            } 
            else 
            {
                if (isLeapYear(year)) 
                {
                    document.getElementById("result").textContent = year + " is a leap year.";
                } 
                else 
                {
                    document.getElementById("result").textContent = year + " is not a leap year.";
                }
            }
        }
    </script>
</body>
</html>
