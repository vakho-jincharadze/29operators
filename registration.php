<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Registration</h1>
    <?php
        $name = $_POST["name"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        if($password === $password2) {
            echo "<h1> Welcome, " . $name . "</h1>";
        } else {
            echo "<h1> Passwords don't match, " . $name . "</h1>";
        }
    ?>
</body>
</html>