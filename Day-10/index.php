<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_POST['submit'])) {
        $name  = strip_tags(trim($_POST['name']));
        $pass  = strip_tags(trim($_POST['password']));
        $email = strip_tags(trim($_POST['email']));
        echo "Name: $name<br>Password: $pass<br>Email: $email";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form:</title>
</head>
<body>
    <form action="#" method="post">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Your name" required maxlength="30" minlength="3"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="khatebi@#@II" required maxlength="15" minlength="5"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Enter Your Email" required maxlength="30" minlength="8"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
