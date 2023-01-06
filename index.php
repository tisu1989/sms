<?php
    session_start();  
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        header('Location: /sms/login.php');
    }else{
        header('Location: /sms/welcome.php');
    }
?>