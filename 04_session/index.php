<?php 
    session_start() //Always have to start the session, when you are want wsing the session key and value
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Abdullah Al Mamun">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION Global Va riable Practice | PHP Learn With A-Al-Mamun</title>
</head>
<body>
    
    <?php 
        if (isset($_SESSION["User"])) {
            echo "User Name :". $_SESSION["User"];

        }
    ?>
</body>
</html>