<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registration</h1>
    <form action="registration.php" method="POST">
    <input type="text" name="name" placeholder="Name" required>
    </br>
    <input type="password" name="password" placeholder="Password" required>
    </br>
    <input type="password" name="password2" placeholder="Repeat password" required>
    </br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>