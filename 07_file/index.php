<?php
    if(isset($_FILES['image'])){
        $img_name = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $img_tmp_name = $_FILES['image']['tmp_name'];
        $img_type = $_FILES['image']['type'];

        // echo $img_name;
        if(isset($_POST['submit'])){
            move_uploaded_file($img_tmp_name,to: "upload_file/" . $img_name);
            echo "Successfully uploaded";
        } 
        echo "<img src='upload_file/$img_tmp_name'>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Global variable Practice</title>
</head>
<body>
    <img src="upload_file/<?php $img_tmp_name ?>" alt="">
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Upload Section</h1>
        <input type="file" name="image" id=""><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>