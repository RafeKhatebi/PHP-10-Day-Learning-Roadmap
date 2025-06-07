<?php
    if (isset($_POST['submit'])) {
        $skills   = $_POST['skills'] ?? [];
        $name     = htmlspecialchars($_POST['name'] ?? '');
        $email    = htmlspecialchars($_POST['email'] ?? '');
        $password = htmlspecialchars($_POST['password'] ?? '');

        // Display the submitted form data
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        echo "Skills: " . implode(",", $skills) . "<br>";

    }
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        // Check if the file was uploaded without errors
        if ($file['error'] === UPLOAD_ERR_OK) {
            // Display file information
            $filename = $file['name'];
            $filesize = $file['size'];
            echo "File Name: " . htmlspecialchars($filename) . "<br>";
            echo "File Size: " . htmlspecialchars($filesize) . " bytes<br>";

            // Move the uploaded file to a specific directory
            $uploadDir  = 'uploads/';
            $uploadFile = $uploadDir . basename($file['name']);

            // Ensure the upload directory exists
            if (! is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
                echo "File uploaded successfully: " . htmlspecialchars($uploadFile) . "<br>";
            } else {
                echo "Failed to move uploaded file.<br>";
            }
        } else {
            echo "Error uploading file: " . $file['error'] . "<br>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
    <h1>Form</h1>
    <label for="name">Name: </label>
    <input type="text" name="name" placeholder="Enter your name">
    <br>
    <label for="email">Email: </label>
    <input type="email" name="email" placeholder="Enter your email">
    <br>
    <label for="password">Password: </label>
    <input type="password" name="password" placeholder="Enter your password">
    <br>
    <label for="skills">skills</label>
    <input type="checkbox" name="skills[]" >HTML
    <input type="checkbox" name="skills[]" >CSS
    <input type="checkbox" name="skills[]" >JavaScript
    <input type="checkbox" name="skills[]" >PHP
    <br>
    <label for="file">Upload Your CV</label>
    <input type="file" name="file" accept=".pdf,.doc,.docx">
    <br>
    <button name="submit" value="submit">Submit</button>
</form>
</body>
</html>
