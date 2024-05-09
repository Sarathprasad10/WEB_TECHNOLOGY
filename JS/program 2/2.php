<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Largest num</title>
</head>
<body>

<h1>Find the largest</h1>

<br><br>
<label for="num1">Enter a number:</label>
<input type="text" id="num1">

<label for="num2">Enter another number:</label>
<input type="text" id="num2">
<br><br>
<button onclick="showPrompt()">Submit</button>


<script>

// Function to show a prompt box
function showPrompt() {
  var num1 = parseFloat(document.getElementById("num1").value);
  var num2 = parseFloat(document.getElementById("num2").value);

  if (isNaN(num1) || isNaN(num2)) {
    alert("Please enter valid numbers!");
    return;
  }

  if (num1 > num2) {
    alert(num1 + " is greater than " + num2);
  } else if (num1 === num2) {
    alert(num1 + " and " + num2 + " are equal.");
  } else {
    alert(num2 + " is greater than " + num1);
  }

  var userInput = prompt("Please enter your name:", "");
  
  if (userInput !== null) {
    alert("Hello, " + userInput + "!");
  } else {
    alert("You clicked Cancel or dismissed the prompt!");
  }
}
</script>

</body>
</html>
