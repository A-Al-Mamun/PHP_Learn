<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variable _SERVER</title>
    <style>
        form{
            width: 160px;
            margin: 30px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 3px 3px 20px black;
        }
        input{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="#">Name</label><input type="text" name="name"><br>
        <label for="#">Age</label><input type="text" name="age"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_REQUEST['submit'])){
            echo $_REQUEST['name']. "<br>";
            echo $_REQUEST['age'];
        }
    ?>
</body>
</html>