 <?php
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Section | PHP Learn Project 1</title>

    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="./assets/css/header.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo"><a href="#">Loho</a></div>
            <nav>
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Info List</a>
                <a href="#">Blog</a>
                <a href="#">Contact</a>
            </nav>
            <div class="header-btn">
                <div class="log">
                    <a href="#">Log In</a>
                    <div class="login">
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="pass" placeholder="PassWord">
                            <input type="submit" name="log" value="Log In">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>