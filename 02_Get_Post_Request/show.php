<?php
// git commit -m "Get, POST, and REquest Paractice"

    // echo "<pre>";
    //     print_r ($_GET);
    // echo "</pre>";

    // echo "<pre>";
    //     print_r ($_POST);
    // echo "</pre>";

    // echo $_GET['name'] . '<br>';
    // echo $_GET['email'];

    // echo $_POST['name'] . '<br>';
    // echo $_POST['email'];

    echo "<pre>";
        print_r ($_REQUEST);
    echo "</pre>";

    echo $_REQUEST['name'] . '<br>';
    echo $_REQUEST['email'];

    // Also Practice in $_SERVER

    echo "<pre>";
        print_r ($_SERVER);
    echo "</pre>";


    echo $_SERVER['MIBDIRS'];


?>