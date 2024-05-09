<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Random Background Color</title>
<h1>happy holi</h1>
<style>
    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Arial, sans-serif;
    }
    button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
    .holi{
    vertical-align: top;
    }
    h1
    {
        margin-top: -200px;
        margin-left:20px;
    }

    
</style>
</head>
<body id="body">

    <button onclick="changeBackgroundColor()">Change Background Color</button>

    <script>
        function changeBackgroundColor() {
            // Generate random RGB values
            var red = Math.floor(Math.random() * 256);
            var green = Math.floor(Math.random() * 256);
            var blue = Math.floor(Math.random() * 256);

            // Construct the RGB color string
            var color = 'rgb(' + red + ',' + green + ',' + blue + ')';

            // Set the background color of the document body
            document.body.style.backgroundColor = color;
        }
    </script>
</body>
</html>
