<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Address and Cookies</title>
</head>
<body>
    <h1>Your IP Address and Cookies</h1>
    <p><strong>Your IP Address:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    <h2>Your Cookies:</h2>
    <ul>
        <?php
        foreach ($_COOKIE as $name => $value) {
            echo "<li><strong>$name:</strong> $value</li>";
        }
        ?>
    </ul>
</body>
</html>
