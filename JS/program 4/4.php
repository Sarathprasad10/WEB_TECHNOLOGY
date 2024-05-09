<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sort Array</title>
</head>
<body>
    <h1>Sort Array Example</h1>
    <h2>Names to sort are</h2>
    <label for="">John, Alice, Bob, David, Eva</label>
    <br><br>
    <button onclick="sortArray()">Sort Names</button>
    <p id="result"></p>

    <script>
        function sortArray() {
            // Sample array
            var array = ["John", "Alice", "Bob", "David", "Eva"];

            // Sorting the array
            array.sort() 
            // Displaying the sorted array
            document.getElementById("result").innerText = "Sorted Names: " + array.join(", ");
        }
    </script>
</body>
</html>
