<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
</head>
<body>
    <h1>Fibonacci Sequence</h1>
    <div id="fibonacci_sequence"></div>

    <script>
        // Function to generate Fibonacci sequence
        function fibonacci(n) {
            var fib_sequence = [0, 1];
            for (var i = 2; i < n; i++) {
                fib_sequence.push(fib_sequence[i - 1] + fib_sequence[i - 2]);
            }
            return fib_sequence;
        }

        // Get user input for the number of Fibonacci numbers to generate
        var n = parseInt(prompt("Enter the number of Fibonacci numbers to generate:"));

        // Generate Fibonacci sequence
        var fib_sequence = fibonacci(n);

        // Display Fibonacci sequence in HTML
        var sequenceDiv = document.getElementById("fibonacci_sequence");
        sequenceDiv.innerHTML = "<p>" + fib_sequence.join(", ") + "</p>";
    </script>
</body>
</html>
