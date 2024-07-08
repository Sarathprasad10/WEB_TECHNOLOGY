<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Popup Boxes Example</title>
</head>
<body>
 
<h1>Popup Boxes Example</h1>

<button onclick="showAlert()">Show Alert</button>
<button onclick="showConfirm()">Show Confirm</button>
<button onclick="showPrompt()">Show Prompt</button>

<script>
// Function to show an alert box
function showAlert() {
  alert("This is an alert box!");
}

// Function to show a confirm box
function showConfirm() {
  var result = confirm("Do you want to proceed?");
  if (result) {
    alert("You clicked OK!");
  } else {
    alert("You clicked Cancel!");
  }
}

// Function to show a prompt box
function showPrompt() {
  var userInput = prompt("Please enter your name:", "John Doe");
  if (userInput !== null) {
    alert("Hello, " + userInput + "!");
  } else {
    alert("You clicked Cancel or dismissed the prompt!");
  }
}
</script>

</body>
</html>
