

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="SignUpPage1.css">
</head>
<body>
    <div class="SignUp">
        <div class="SignUpInfo">
            <img class="SignUplogo" src="Images/Your_paragraph_text__3_-removebg-preview 1.png" alt="">
            <p>The Best Freelance Site out there.</p>
            <img class="Typewriter" src="Images/vibrantly-colored-retro-typewriter-with-keyboard-buttons-PhotoRoom.png-PhotoRoom.png" alt="">
        </div>
        <form name="Signupform" action="Signup.php" id="SUForm" method="post" onsubmit="return validateform()">
            <h2>Create Account</h2>
            <div class="Fullname">
                 <input required type="text" name="SUFirstName" id="SUFirstName"><span class="FirstNameSpan">First Name</span>
                <input required type="text" name="SULastName" id="SULastName"><span class="FirstNameSpan">Last Name</span>
            </div>
            
            <span  class="EmailSpan">Email</span> <input type="email" name="SUEmail" id="SUEmail"><br>
            <span  class="NPasswordSpan">Enter Password</span> <input required type="password" name="SUNPassword" id="SUNPassword"><br>
            <span  class="CPasswordSpan">Confirm Password</span> <input required type="password" name="SUCPassword" id="SUCPassword"><br>
            <input type="submit" id="SUSubmit">
        </form>

        
    </div>
    <p>Already have an account. To Sign in <a href="Signin.php">click here</a></p>
   
</body>

</html>

<script>
 function validateform(){
    var newpass= document.Signupform.SUNPassword.value;
    var confpass= document.Signupform.SUCPassword.value;

    if(newpass!=confpass){
        alert("New Password and Confirm Password values must be the same.")
        return false;
    }
 }
 
</script>

