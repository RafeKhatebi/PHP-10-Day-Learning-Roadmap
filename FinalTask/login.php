<?php
    require_once 'config.php';
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
        exit;
    }
    $error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email    = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (empty($email) || empty($password)) {
            $error = "Both fields are required";
        } else {
            $users         = readUsers();
            $authenticated = false;

            foreach ($users as $user) {
                if ($user['email'] === $email && $user['password'] === $password) {
                    $_SESSION['user'] = [
                        'fullname' => $user['fullname'],
                        'email'    => $user['email'],
                    ];

                    header('Location: profile.php');
                    exit;
                }
            }

            $error = "Incorrect email or password";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>User Login</h1>

    <?php if ($error): ?>
        <p style="color:red"><?php echo $error ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <label>
            <input type="checkbox" name="remember"> Remember me
        </label><br>

        <button type="submit">Login</button>
    </form>
    <p>Not registered? <a href="register.php">Create account</a></p>
</body>
</html>