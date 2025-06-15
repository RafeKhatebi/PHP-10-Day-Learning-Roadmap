<?php
    require_once 'config.php';
    $errors  = [];
    $success = false;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize inputs
        $name     = trim($_POST['fullname']);
        $email    = trim($_POST['email']);
        $password = trim($_POST['password']);

        // Validate inputs
        $errors = validateRegistration($name, $email, $password);

        if (empty($errors)) {
            $users = readUsers();

            // Check if email exists
            foreach ($users as $user) {
                if ($user['email'] === $email) {
                    $errors[] = "Email already registered";
                    break;
                }
            }

            // Register new user
            if (empty($errors)) {
                $users[] = [
                    'fullname' => $name,
                    'email'    => $email,
                    'password' => $password,
                ];

                saveUsers($users);
                $success = true;
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration</h1>

    <?php if ($success): ?>
        <p style="color:green">Registration successful! <a href="login.php">Login now</a></p>
    <?php endif; ?>

    <?php foreach ($errors as $error): ?>
        <p style="color:red"><?php echo $error ?></p>
    <?php endforeach; ?>

    <form method="POST">
        <label>Full Name:</label>
        <input type="text" name="fullname" required placeholder="Ali jamili"><br>

        <label>Email:</label>
        <input type="email" name="email" required placeholder="rkhatibi33@gmail.com"><br>

        <label>Password:</label>
        <input type="password" name="password" required placeholder="hggy#8bb"><br>

        <button type="submit">Register</button>
    </form>
    <p>Already registered? <a href="login.php">Login here</a></p>
</body>
</html>