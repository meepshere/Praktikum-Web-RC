<?php
    session_start();

    $_SESSION = array();

    session_destroy();

    $BASE_URL = "/pemwebm8";
    header("Location: $BASE_URL/index.php");
?>