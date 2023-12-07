<?php
    include_once("db.php");
    
    $pid = $_POST["pid"];
    $pname = $_POST["pname"];
    $pdetail = $_POST["pdetail"];
    $pprice = $_POST["pprice"];
    // if(isset($_FILES['pimage'])){
        $pimage = $_FILES['pimage'];
    // }

    $empSql = "INSERT INTO products(product_name,details,price) JOIN product_images(product_id,image)  VALUES('{$pname}','{$pdetail}','{$pprice}','{$pid}','{$pimage}') ";

    $empResult = mysqli_query($conn, $empSql) or die("Query Failed");

    header("Location: http://localhost/PHP_Learn/06_CRUD/index.php");

    mysqli_close($conn);
?>