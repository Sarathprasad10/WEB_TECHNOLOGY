<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Binary Converter</title>
</head>
<body>
    <h1>Decimal to Binary Converter</h1>
    <label for="decimalInput">Enter a decimal number:</label>
    <input type="number" id="decimalInput">
    <button onclick="convertToBinary()">Convert</button>
    <p id="binaryOutput"></p>

    <script>
        function convertToBinary() {
            // Get the decimal input value
            var decimalNumber = parseInt(document.getElementById("decimalInput").value);
            
            // Initialize variables
            let bin = 0;
            let rem, i = 1;
            let binaryString = '';
            
            // Convert decimal to binary
            while (decimalNumber !== 0) {
                rem = decimalNumber % 2;
                decimalNumber = parseInt(decimalNumber / 2);
                binaryString = rem + binaryString;
            }
            
            // Display the binary output
            document.getElementById("binaryOutput").innerText = "Binary: " + binaryString;
        }
    </script>
</body>
</html>


