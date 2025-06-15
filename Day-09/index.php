<?php
    //Start of session
    session_start();
    //Set session variables:
    $_SESSION['name'] = "Ali";
    $_SESSION['id']   = "S41200";
?>
<!DOCTYPE html>
<head>
    <title>Session</title>
</head>
<body>
    <?php
        echo "Session variables are set.<br>";

        echo "Your name is :" . $_SESSION['name'] . "<br> ";

        echo "Your id is :" . $_SESSION['id'];
    ?>

</body>
</html>
