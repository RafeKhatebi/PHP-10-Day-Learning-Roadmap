<?php
    require_once 'config.php';
    if (! isset($_SESSION['user'])) {
        header('Location: login.php');
        exit;
    }

    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>Welcome <?php echo htmlspecialchars($user['fullname'])?></h1>

    <h2>Your Profile</h2>
    <p><strong>Full Name:</strong> <?php echo htmlspecialchars($user['fullname'])?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email'])?></p>

    <form action="logout.php" method="POST">
        <button type="submit">Logout</button>
    </form>

    <?php if ($user['email'] === ADMIN_EMAIL): ?>
        <p><a href="admin.php">Admin Panel</a></p>
    <?php endif; ?>
</body>
</html>