<!DOCTYPE html>
<html>
<head>
    <title>Quadratic Equation</title>
</head>
<body>
    <h1>Javascript Program to Solve Quadratic Equation</h1>
    <h2>Quadratic Equation is: ax<sup>2</sup> + bx + c</h2>
    <input type="button" value="Find Root" onclick="func()">
    <script>
        function func() { 
            //a=1,b-3,c=2 
            let a = prompt("Enter the value of a");
            let b = prompt("Enter the value of b");
            let c = prompt("Enter the value of c");
            let discriminant = b * b - 4 * a * c;
            // (-b ± √b^2 - 4ac) / 2a
            let x = (-b + Math.sqrt(discriminant)) / (2 * a);
            let y = (-b - Math.sqrt(discriminant)) / (2 * a);
            alert("Your first root is: " + x);
            alert("Your second root is: " + y);
        }
    </script>
</body>
</html>
