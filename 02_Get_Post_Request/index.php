<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Abdullah Al Mamun">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET, POST, and Request Method Practice | PHP Learn With A-Al-Mamun</title>
</head>
<style>
    form{
        width: 500px;
        margin: 0 auto;
        text-align: center;
    }
    form input{
        margin-bottom: 10px;
        font-size: 20px;

    }
</style>
<body>
    <!-- <form action="show.php" method="get"> -->
    <!-- <form action="show.php" method="post"> -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <h1>Information Collect</h1>
        <input type="text" name="name" placeholder="Enter Name"><br>
        <input type="email" name="email" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php 
        if (isset($_POST['submit'])) {
            echo 'Name :'. $_POST['name'] .'<br>';
            echo 'Email :'. $_POST['email'] .'<br>';
        }
    ?>
</body>
</html>