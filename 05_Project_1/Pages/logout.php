<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log Out Page | PHP Learn With A-Al-Mamun</title>

    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="login">
        <h1>Log Out</h1>
    </div>

    <?php
        session_start();
        session_unset();
        session_destroy();
    ?>
</body>
</html>