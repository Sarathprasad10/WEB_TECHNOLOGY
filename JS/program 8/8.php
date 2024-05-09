<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Date and Time</title>
</head>
<body>
    <h1>Current Date and Time</h1>
    <button onclick="showDateTime()">Click here to Display Current Date & Time</button>
    <br/><br/>
    <p id="datetime" style="display: none;"></p>
  
    <script>
        // Function to update the date and time
        function updateDateTime() {
            // Get the current date and time
            var now = new Date();

            // Format the date and time
            var datetimeString = now.toLocaleString();

            // Return the formatted date and time
            return datetimeString;
        }

        // Function to show the date and time
        function showDateTime() {
            // Get the datetime paragraph element
            var datetimeParagraph = document.getElementById("datetime");

            // Update the inner text of datetime paragraph with the current date and time
            datetimeParagraph.innerText = updateDateTime();

            // Show the datetime paragraph by changing its display style
            datetimeParagraph.style.display = "block";
        }
    </script>
</body>
</html>
