<?php
    require_once 'config.php';
    if (! isset($_SESSION['user']) || $_SESSION['user']['email'] !== ADMIN_EMAIL) {
        header('Location: profile.php');
        exit;
    }

    $users = readUsers();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <h2>Registered Users</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['fullname'])?></td>
                    <td><?php echo htmlspecialchars($user['email'])?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><a href="profile.php">Back to Profile</a></p>
</body>
</html>