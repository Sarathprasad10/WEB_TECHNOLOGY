<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example</title>
</head>
<body>
    <h2>Cookie Example</h2>
    <?php
    // Check if the cookie is set
    if(isset($_COOKIE['username'])) {
        echo "Welcome back, " . $_COOKIE['username'] . "!<br>";
        echo "Your email is: " . $_COOKIE['email'] . ".";
    } else {
    ?>
    <form method="post" action="">
        Enter your name: <input type="text" name="username"><br>
        Enter your email: <input type="email" name="email"><br>
        <input type="submit" name="submit" value="Save">
    </form>

    <?php
    }

    // Process the form submission
    if(isset($_POST['submit'])) {
        // Get the form data
        $username = $_POST['username'];
        $email = $_POST['email'];

        // Set cookies with user information
        setcookie('username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('email', $email, time() + (86400 * 30), "/");

        // Display a success message
        echo "Cookies set successfully!";
    }
    ?>

    <p>Refresh the page to see the saved cookies.</p>
</body>
</html>
