<!DOCTYPE html>
<html>
<head>
    <title>Count Vowels</title>
</head>
<body>
    <h1>Count Vowels in a String</h1>
    <input type="text" id="inputString" placeholder="Enter a string"> 
    <button onclick="countVowels()">Count Vowels</button>
    <p id="result"></p>

    <script>
        function countVowels() {
            // Get the input string from the user
            var inputString = document.getElementById("inputString").value;

            // Define a regular expression to match vowels (case-insensitive)
            var vowelRegex = /[aeiou]/gi;

            // Use match() method to find all occurrences of vowels in the string
            var vowelMatches = inputString.match(vowelRegex);

            // Check if there are any matches
            if (vowelMatches) {
                // Count the number of matches (number of vowels)
                var numVowels = vowelMatches.length;
                // Display the result
                document.getElementById("result").innerText = "Number of vowels: " + numVowels;
            } else {
                // If there are no matches, display a message
                document.getElementById("result").innerText = "No vowels found in the string.";
            }
        }
    </script>
</body>
</html>
