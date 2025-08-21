<?php
session_id("logininfo");
session_start();
$_SESSION['firstname']=$_POST['SUFirstName'];
$_SESSION['lastname']=$_POST['SULastName'];
$_SESSION['email']=$_POST['SUEmail'];
$_SESSION['password']=$_POST['SUNPassword'];
$_SESSION['cpassword']=$_POST['SUCPassword'];
// $_SESSION['keyword']="";

$firstname=$_SESSION['firstname'];
$lastname=$_SESSION['lastname'];
$email=$_SESSION['email'];
$password=$_SESSION['cpassword'];


$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="megenagna";
$conn="";

try {
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    
} catch (mysqli_sql_exception) {
   echo "could not connect";
}

$sql="INSERT INTO users(firstname,lastname,email,password)
            VALUES('$firstname','$lastname','$email','$password')";

try {
    mysqli_query($conn,$sql);
} catch (mysqli_sql_exception) {
    echo "user not registered!";
}


if($_SESSION['Page']=="Home"){
    header("location: Home_page.php");
}

?>


