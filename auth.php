<?php
    if (!isset($_SESSION["logged_in"])){
        header('Location: login.html');
        die();
    }
?>