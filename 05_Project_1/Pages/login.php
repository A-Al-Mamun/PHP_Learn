<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In Page | PHP Learn With A-Al-Mamun</title>

    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="login">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="PassWord">
            <input type="submit" name="log" value="Log In">
        </form>
    </div>

    <?php
        if (isset($_POST['log'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            session_start();
            $_SESSION['User'] = $email;
            
            header('Location: http://localhost/PHP_Learn/05_Project_1/');
        }

        
    ?>
</body>
</html>