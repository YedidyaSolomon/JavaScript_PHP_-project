<?php
session_id("logininfo");
session_start();
$_SESSION['Page']="Home";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megenagna Freelance</title>
    <link rel="stylesheet" href="Home_page.css">
</head>
<body id="body">
    <div class="Wrapper1" id="wrapper1">
        <div class="Head1">
            <header class="W1_Header">
                 <img src="Images/Your_paragraph_text__3_-removebg-preview 1.png" alt="" class="Logo" >
                </header>
            <nav class="W1_Nav">
                <ul class="W1_Nav_Ul">
                    <li class="Home" id="Home"><a href="#" style="color: #49BEF9;">Home</a></li>
                    <li class="About"><a href="About.php">About</a></li>
                    <li class="Sign_In" id="Sign_In"><a id="Sign_In_a" href="Signin.php" >Sign in</a></li>
                    <li class="Join" id="Join">
                        <button class="Join_button" id="Join_button" onclick="location.href='SignUpPage1.php'">Join</button>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="Head2">
            <P class="W1_Par">Immediately find the ideal <span>freelance service</span>.</P>
           
            <form class="W1SearchBar" id="W1SearchBar" action="listonly.php" method="post">
                <input required class="W1_Input" type="text" name="W1_Input" placeholder="Search for any service...">
                <button class="W1_Button"><img src="Images/622669 1.png" alt=""></button>
            </form>

            <form class="W1_PopularOptions" action="popularsearch.php" method="get">
                    <span class="W1_popular">Popular:</span>
                    <input type="submit" class="W1_span" style="background-color: transparent;  " name="W1_span" value="Logo">
                    <input type="submit" class="W1_span" style="background-color: transparent;  " name="W1_span" value="AI Services">
                    <input type="submit" class="W1_span" style="background-color: transparent;  " name="W1_span" value="Transcriber">
                    
            </form>
            
        </div>

            
       
    </div>
        
    <div id="SignInForm" class="Sign_inMain">

        <div class="signin">
            <img class="Signin_img" src="Images/4957136_4957136 1.png">
            <form id="signin_inputs" class="signin_inputs" action="Home_page.php" method="post">
    
                <div class="inputs_back">
                    <button onclick="closeSignIn()" class="back_button"><img class="back_icon" src="Images/8022657 1.png" ></button>
                    <p class="back_text">Back</p>
                </div>
            <h1 class="input_header">To sign in, please insert the following informations</h1>
            <p class="input_identity">Gmail</p>
            <input id="input" class="input_identityenter" type="email" name="gmail" placeholder="Enter your gmail">
            <p class="input_password">Password</p>
            <input id="input1" class="input_passwordenter" type="password" name="password" placeholder="Enter the Password"><br>
            <input type="submit" class="input_submitbutton" value="Continue">
    
            </form>
    
        </div>

    </div>

    <div id="Wrapper2" class="Wrapper2">
        <span>Popular Services</span>
        <div class="W2_PopularServices">

            <img src="Images/circle-chevron-left-solid 1.svg" alt="" class="W2_IconPrevious">

            <div class="W2_PS1" id="Web">

                <div class="PSimage1">
                    <img  class="PSimg" src="Images/pexels-djordje-petrovic-2102416 1.png" alt="">
                </div>

                <div class="PSSpan">
                    <span class="PSspan1">Build a Website</span>
                </div>

            </div>

            <div class="W2_PS1" id="Graphics">

                <div class="PSimage1">
                    <img  class="PSimg" src="Images/pexels-polina-zimmerman-3747266 1.png" alt="">
                </div>

                <div class="PSSpan">
                    <span class="PSspan1">Graphics & Design</span>
                </div>

            </div>

            <div class="W2_PS1" id="Logo">

                <div class="PSimage1">
                    <img  class="PSimg" src="Images/pexels-luis-quintero-3892890 1.png" alt="">
                </div>

                <div class="PSSpan">
                    <span class="PSspan1">Logo Design</span>
                </div>

            </div>

            <div class="W2_PS1" id="Illustration">

                <div class="PSimage1">
                    <img  class="PSimg" src="Images/pexels-lex-photography-450596 1.png" alt="">
                </div>

                <div class="PSSpan">
                    <span class="PSspan1">Illustration</span>
                </div>

                
            </div>

            <img src="Images/circle-chevron-left-solid 2.svg" alt="" class="W2_IconNext">
            
        </div>

        

    </div>

    

    <Header id="mock" class="mock" onclick="closemock()">A</Header>

   
    <footer class="footer">
        <div class="fsec1">
           <p class="fsec1Par">To join our <span class="fsecspan1">family</span>
                <span class="fsecspan2">click</span> the join button</span>
                <button class="fsec1button">JOIN</button>
        </div>
   
        <div class="fsec2">
           <div class="fsec2Icons">
               <a href="#"><img src="AboutImages/icons8-x-50.png" alt=""></a>
               <a href="#"><img src="AboutImages/icons8-facebook-50.png" alt=""></a>
               <a href="#"><img src="AboutImages/icons8-instagram-50.png" alt=""></a>
           </div>
           <div class="agreements">
               <p>Privacy and Conditions</p>
               <p>Terms and Conditions</p>
           </div>
        </div>
   </footer>
   
</body>
</html>

<script>

    const Pservices=document.querySelectorAll(".W2_PS1");

    Pservices.forEach(button=>{
        button.addEventListener("click",()=>{
            location.href="listonly.php"

        })
    })

      
    let wrapper1=document.getElementById("wrapper1")
    let wrapper2=document.getElementById("Wrapper2")
    let body=document.getElementById('body')
    let SignInForm=document.getElementById('SignInForm');
    var input=document.getElementById('input')
    var input1=document.getElementById('input1')
    
    
    function openSignIn(){
        SignInForm.classList.add("open_Signin_page")
        wrapper1.classList.add("blur_wrapper")
        wrapper2.classList.add("blur_wrapper")
        body.classList.add('body_unscroll')
      

    }
    function closeSignIn(){
        SignInForm.classList.remove("open_Signin_page")
        wrapper1.classList.remove("blur_wrapper")
        wrapper2.classList.remove("blur_wrapper")
        body.classList.remove('body_unscroll')
        input.value=''
        input1.value=''
        
    }
    var UserFname="<?php
    echo $_SESSION['firstname'];
    ?>"

    if(UserFname!=""){
        var Sign_In_a=document.getElementById('Sign_In_a'); 
        var Join_button=document.getElementById('Join_button'); 
        var Join=document.getElementById('Join');
        Join_button.textContent=UserFname;
        Join_button.setAttribute('onclick','x()');
        var liuser=document.getElementById('Join');
        var Submenu=document.createElement('ul')
        var Submenul1=document.createElement('li')
        var Submenua1=document.createElement('a')
        var Submenul2=document.createElement('li')
        var Submenua2=document.createElement('a')
        Submenua1.href="Home_page.php";
        Submenua2.href="logout.php";
        Sign_In_a.href="";
        Submenua1.textContent="History";
        Submenua2.textContent="Log out";
        Submenu.append(Submenul1);
        Submenul1.append(Submenua1);
        Submenu.append(Submenul2);
        Submenul2.append(Submenua2);
        Submenu.className='Submenu'
        liuser.append(Submenu);

    }
    function x(){
        
        
    }
    
    // console.log("<?php
    // echo $_SESSION['firstname']." ".$_SESSION['lastname']." ".$_SESSION['email']." ".$_SESSION['password']." ".$_SESSION['cpassword'];
    // ?>");

 console.log("<?php
    // echo $_SESSION['SignInEmail']." ".$_SESSION['SignInPassword'];
    // ?>");


    



</script>

