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

        $imgSql = "UPDATE product_images SET product_id = '{$pid}',image = '{$filename}' WHERE product_id = {$pid}";
    
        // Execute query
        $imgResult = mysqli_query($conn, $imgSql) or die("Query Failed");
    
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h3>  Image uploaded successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    }

    $proSql = "UPDATE products SET product_name = '{$pname}', details = '{$pdetail}', price = '{$pprice}' WHERE p_id == {$pid}";

    $proResult = mysqli_query($conn, $proSql) or die("Query Failed");

    header("Location: http://localhost/PHP_Learn/06_CRUD/index.php");

    mysqli_close($conn);
?>