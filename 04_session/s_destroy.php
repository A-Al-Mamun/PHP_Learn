<?php 
    session_start(); //Always have to start the session, when you are want wsing the session key and value
    session_unset(); //session unset
    session_destroy();  // FInally destroy the session 
    echo "Perfecktly Destroy the Session Value";
?>