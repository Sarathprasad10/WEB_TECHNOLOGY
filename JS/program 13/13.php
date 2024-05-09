<!DOCTYPE html>
<html>
<head>
<title>JS Toggle Password Visibility</title>
</head>
<h1>Password Visibility Toggle</h1>
Enter Password: <input type="password" value="" id="pswrd">
<input type="checkbox" onclick="toggleVisibility()"/>Show Password</br>
<body>
<script>
function toggleVisibility() 
{
var getPasword = document.getElementById("pswrd");
if (getPasword.type === "password") 
{
getPasword.type = "text";
} 
else 
{
getPasword.type = "password";
}
}
</script>
</body>