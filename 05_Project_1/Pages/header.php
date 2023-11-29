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
                    <a href="http://localhost/PHP_Learn/05_Project_1/Pages/login.php" target="-blank">
                        <?php if(isset($_SESSION['User'])){
                            echo $_SESSION['User'] . "<br>";

                            $logout = '<a href="http://localhost/PHP_Learn/05_Project_1/Pages/logout.php" target="_blank">Logout</a>';
                            echo $logout;

                        }else
                            echo "Log In";
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>