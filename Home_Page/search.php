<?php
    session_id("logininfo");
    session_start();
    // $_SESSION['searchkeyword']=$_POST['W1_Input'];
    $_SESSION['searchkey']=$_POST['W1_Input'];
    $catagory=$_SESSION['searchkey'];
    $db_server="localhost";
    $db_host="root";
    $db_pass="";
    $db_name="megenagna";
    $conn="";
    try{
        $conn=mysqli_connect($db_server,$db_host,$db_pass,$db_name);
    }catch(mysqli_sql_exception){
        echo "not connected";
    }
    $data=array();
    $sql="SELECT * FROM services WHERE catagory='$catagory'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>1){
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;
        }
    }


    // header("location: listonly.php");

?>