<?php
// Function to set cookie with current date/time
function setLastVisitedCookie() 
{
    $lastVisited = date('Y-m-d H:i:s');
    setcookie('last_visited', $lastVisited, time() + (86400 * 30), "/"); // Cookie valid for 30 days
}

// Function to display last visited date/time from cookie
function displayLastVisited() 
{
    if(isset($_COOKIE['last_visited'])) 
    {
        echo "Last visited on: " . $_COOKIE['last_visited'];
    } 
    else 
    {
        echo "First visit!";
    }
}

// Check if form submitted, then set cookie
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    setLastVisitedCookie();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last Visited</title>
</head>
<body>

    <h1>Welcome!</h1>
    
    <p><?php displayLastVisited(); ?></p>

    <form method="post">
        <button type="submit">Update Last Visited</button>
    </form>

</body>
</html>
