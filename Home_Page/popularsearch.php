<?php
    session_id("logininfo");
    session_start();
    $_SESSION['searchkey']=$_GET['W1_span'];
    header("location: listonly.php");

?>