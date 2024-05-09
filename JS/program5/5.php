<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Function Call Example</title>
</head>
<body>
    <h1>Function Call Example</h1>
    <label for="">When the button is clicked, it triggers the sayHello() function call.</label>
    <br><br>
    <button onclick="sayHello()">Say Hello</button>
    <p id="result"></p>

    <script>
        // Define a function
        function sayHello() {
            // Function body
            var greeting = "Hello, World!";
            // Display the greeting
            document.getElementById("result").innerText = greeting;
        }
    </script>
</body>
</html>
