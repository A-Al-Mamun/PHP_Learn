<?php
    include_once("db.php");
    
    $pid = $_POST["pid"];
    $pname = $_POST["pname"];
    $pdetail = $_POST["pdetail"];
    $pprice = $_POST["pprice"];
   
    error_reporting(0);
 
    $msg = "";
    
    // If upload button is clicked ...
    if (isset($_POST['padd'])) {
    
        $filename = $_FILES["pimage"]["name"];
        $tempname = $_FILES["pimage"]["tmp_name"];
        $folder = "../images/" . $filename;
        
        // Get all the submitted data from the form

        $proSql = "INSERT INTO product_images(product_id,image)  VALUES('{$pid}','{$filename}') ";
    
        // Execute query
        $proResult = mysqli_query($conn, $proSql) or die("Query Failed");
    
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    }

    $sql = "INSERT INTO products(pid,product_name,details,price) VALUES('{$pid}','{$pname}','{$pdetail}','{$pprice}')";

    $result = mysqli_query($conn, $sql) or die("Query Failed");

    header("Location: http://localhost/PHP_Learn/06_CRUD/index.php");
    mysqli_close($conn);

    

    

    
?>