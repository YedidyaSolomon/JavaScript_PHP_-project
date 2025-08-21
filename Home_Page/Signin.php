<?php
session_id("logininfo");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Signin.css">
</head>
<body>
    <div class="SignIn">
        <div class="SignInInfo">
            <img class="SignInlogo" src="Images/Your_paragraph_text__3_-removebg-preview 1.png" alt="">
            <p>The Best Freelance Site out there.</p>
            <img class="Typewriter" src="Images/vibrantly-colored-retro-typewriter-with-keyboard-buttons-PhotoRoom.png-PhotoRoom.png" alt="">
        </div>
        <form action="Login.php" id="SIForm" method="post">
            <p id="loginError">Wrong username or password</p>
            <h2>Sign In</h2>
            <span class="EmailSpan">Email</span> <input type="email" name="email" id="SIEmail" required><br>
            <span class="PasswordSpan">Enter Password</span> <input type="password" name="password" id="SIPassword" required><br>
            <input type="submit" id="SISubmit">
        </form>

        
    </div>
    <p>Don't have an account. To create new account <a href="SignUpPage1.php">click here</a></p>
   
</body>

</html>

<script>




    
        var loginerror='<?php
                echo $_SESSION['LoginError'];
            ?>';
            console.log(loginerror);

    if(loginerror=="Error"){
        console.log('visible');
        document.getElementById("loginError").style.visibility="visible";
    }else{
        console.log('hidden');
        document.getElementById("loginError").style.visibility="hidden";
    }
    

</script>