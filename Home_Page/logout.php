<?php
session_id('logininfo');
session_start();
session_destroy();
header("location: Home_page.php")
?>