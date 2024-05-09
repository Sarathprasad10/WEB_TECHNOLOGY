<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pyramid Pattern</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 50px;
    }
</style>
</head>
<body>
    <h2>Pyramid Pattern</h2>
    <div id="pyramid"></div>

    <script>
        // Function to construct the pyramid pattern
        function constructPyramid(rows) {
            var pyramid = '';
            // Outer loop for the number of rows
            for (var i = 1; i <= rows; i++) {
                // Inner loop for printing spaces
                for (var j = 1; j <= rows - i; j++) {
                    pyramid += '&nbsp;&nbsp;';
                }
                // Inner loop for printing stars
                for (var k = 1; k <= 2 * i - 1; k++) {
                    pyramid += '* ';
                }
                pyramid += '<br>';
            }
            return pyramid;
        }

        // Number of rows in the pyramid
        var rows = 5;

        // Construct the pyramid pattern
        var pyramidPattern = constructPyramid(rows);

        // Display the pyramid pattern
        document.getElementById('pyramid').innerHTML = pyramidPattern;
    </script>
</body>
</html>
