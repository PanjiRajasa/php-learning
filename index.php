<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>

    <style>
        p {
            margin: 0;
        }
    </style>
</head>
<body>
    <h2>Get Method</h2>
    <form action="index.php" method="$_GET">
        <label>Username: </label> <br>
        <input type="text" name="username" /> <br>
        <label>Password: </label> <br>
        <input type="password" name="password" /> <br> <br>
        <input type="submit" value="Log In" />
    </form>
    
    <h2>Post method</h2>
</body>
</html>
<?php
    
    /*$_GET and $_POST*/
    echo "<p style=\"font-weight: bold;\">Hahaha! I have gotten your personal data, get ready for pinjol! </p>
    <p>Username: {$_GET["username"]} </p>
    <p>Password: {$_GET["password"]} </p>";
?>