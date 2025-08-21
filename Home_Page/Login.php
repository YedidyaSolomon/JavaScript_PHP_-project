<?php
session_id("logininfo");
session_start();

$_SESSION['SignInEmail']=$_POST['email'];
$_SESSION['SignInPassword']=$_POST['password'];
$_SESSION['LoginError']="NoError";

$email=$_SESSION['SignInEmail'];
$password=$_SESSION['SignInPassword'];


$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name="megenagna";
$conn="";
// $correct=true;

try{
$conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
echo "connected succesfully";
}catch(mysqli_sql_exception){
    echo "Not connectedbb";
}

$sql="SELECT * FROM users WHERE email='$email'";

try {
    $result=mysqli_query($conn,$sql);
    echo "<br>fetched";
} catch (\Throwable $th) {
    echo "Not fetched";
}

if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);

    if($row['password']!=$password){
        $_SESSION['LoginError']="Error";
        header("location: Signin.php");
    }else{
        $_SESSION['firstname']=$row['firstname'];
        if($_SESSION['Page']=="Home"){
            header("location: Home_page.php");
        }else{
             header("location: About.php");
        }
    }

}


    // if($_SESSION['Page']=="Home"){
    // header("location: Home_page.php");
    // }
    // 




?>