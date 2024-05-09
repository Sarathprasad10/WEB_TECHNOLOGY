<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email Validation Example</title>
<!-- CSS only -->
<link rel="stylesheet" href="3.css" />
</head>

<body>
    <h1>Email Validation </h1>
<div class="box">
<label for="email">Enter your email:</label>
<input type="text" id="email">
<button onclick="validateEmail()">Validate</button>

<script>
function validateEmail() 
{
  var emailInput = document.getElementById("email").value;
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  if (emailPattern.test(emailInput)) 
  {
    alert("Valid email address!");
  } 
  else 
  {
    alert("Invalid email address! Please enter a valid email.");
  }
}
</script>
</div>
</body>
</html>
