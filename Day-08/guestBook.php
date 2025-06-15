<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Guestbook</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Guestbook</h1>

    <!-- Guestbook Form -->
    <form method="POST">
        <label for="name">Name:</label>
         <input type="text" name="name" required><br><br>
         <label for="message">Message:</label>
       <br>
        <textarea name="message" rows="4" cols="40" required></textarea><br><br>
        <input type="submit" name="submit" value="Sign Guestbook">
    </form>
    <hr>

    <?php
        // Time zone setting
        date_default_timezone_set('Asia/kabul');
        $filename = "guestbook.txt";
        if (isset($_POST['submit'])) {
            // Sanitize input
            $name    = strip_tags(trim($_POST['name']));
            $message = strip_tags(trim($_POST['message']));
            $entry   = date("Y-m-d h:i:s") . " | " . $name . ": " . $message . "\n";

            // Append the entry to the file

            $file = fopen($filename, "a");
            if ($file) {
                fwrite($file, $entry);
                fclose($file);
                echo "<p style='color:green;'>Thank you for signing the guestbook!</p>";
            } else {
                echo "<p style='color:red;'>Error: Could not write to file.</p>";
            }
        }

        // Display previous entries
        if (file_exists($filename)) {
            echo "<h2>Guestbook Entries:</h2><pre>";
            readfile($filename);
            echo "</pre>";
        } else {
            echo "<p>No entries yet. Be the first to sign!</p>";
        }
    ?>
</body>
</html>
