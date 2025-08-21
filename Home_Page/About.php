<?php
session_id("logininfo");
session_start();
$_SESSION['Page']="About";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Megenagna Freelance/About</title>
    <link rel="stylesheet" href="About.css">
</head>
<body>
    
<header class="Header">

    <div class="LogoNav">
        <img class="Logo" src="AboutImages/Your_paragraph_text__3_-removebg-preview 1.png" alt="">
        <nav class="PageNavigation">
            <ul class="Nav_Ul">
                <li class="Home"><a href="Home_page.php" >Home</a></li>
                <li class="About"><a href="#" style="color: #49BEF9;">About</a></li>
                <li class="Sign_In" ><a href="Signin.php" id="Sign_In_a" onclick="">Sign in</a></li>
                <li class="Join" id="Join">
                    <button class="Join_button" id="Join_button" onclick="location.href='SignUpPage1.php'">Join</button>
                </li>
            </ul>
        </nav>
    </div>
    <h1 class="Moto">Your <span>One</span> and <span>Only.</span></h1>
    <nav class="SectionNavigation">
        
        <a href="#OurTeamSection">
             <div class="FirstSec">
                <img src="AboutImages/image 1.png" alt="" draggable="false">
                <p>Our Team</p>
             </div>
        </a>

        <a href="#OurGoalsSection"> 
            <div class="SecondSec">
                <img src="AboutImages/image 3.png" alt="" draggable="false">
                <p>Our Goals</p>
             </div>
        </a>
       
       <a href="#HowItWorksSection">
            <div class="ThirdSec">
                <img src="AboutImages/image 2.png" alt="" draggable="false">
                <p>How it works</p>
            </div>
        </a>
        
            
    </nav>

    <div class="anglediv1"></div>

</header>

<Section id="OurTeamSection">

    <div class="OTTitleUnit">
        <div class="OTRec"></div>
        <h2 class="OTHeader">OUR TEAM</h2>
    </div>
    <div class="OTFirstImage">  </div>

    <div class="OTPar">

        <p class="OTFirstPar">Megenagna is an online marketplace that connects
            freelancers with buyers who need various digital services. The company
            was established in 2020 by our founders Surafeal Fasil, Yididiya Solomon
            and Nathan Ermias , who wanted to create a platform that would offer a wide
            range of services in a free market.</p>
        <p class="OTSecondPar">Although it had its sights in the capital city of Ethiopia,
            Addis Ababa , Megenagna has grown to become a country wide platform, with freelancers
            and businesses from all over Ethiopia. We currently have more than 300,000 members
            withus.</p>
        <span class="Members">300,000 MEMBERS AND COUNTING</span>
        <p class="OTThirdPar">
            Our platform offers services in various categories, such as writing,
            graphic design, video editing, programming, and more. <span>You name it we have it</span>.
            Some of the highest-paying jobs on Megenagna include website design, social media manager,
            proofreading and copywriting, and resume writing.
        </p>
        
    </div>
    
    <div class="groupofimages">
        <img class="image1" src="AboutImages/pexels-andrea-piacquadio-845434.jpg" >
        <img class="image2" src="AboutImages/pexels-mathilde-langevin-18713031.jpg">
        <img class="image3" src="AboutImages/ApplyNowgiphy.gif">
        <img class="image4" src="AboutImages/photo_2024-01-11_11-02-54.jpg">
    </div>

</Section>


<section id="OurGoalsSection">
    <div class="OGParagraphUnit">

        <div class="OGTitleUnit">
            <div class="OGRec"></div>
        <h3 class="OGHeader">OUR GOALS</h3>
        </div>
        
        <p class="OGPar">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque,
            ipsum illum reprehenderit, est illo dolorum ipsam fugit, quasi sapiente officiis
            atque. Natus molestiae dolorem porro iure, fuga quia repellat incidunt. Lorem ipsum 
            dolor sit, amet consectetur adipisicing elit. Rerum nam atque adipisci reprehenderit
             porro placeat doloribus laudantium sint explicabo consectetur repellendus, iusto
              tenetur ipsa, odit labore, libero facere quibusdam! In! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque,
              ipsum illum reprehenderit, est illo dolorum ipsam fugit, quasi sapiente officiis
              atque. Natus molestiae dolorem porro iure, fuga quia repellat incidunt. Lorem ipsum 
              dolor sit, amet consectetur adipisicing elit. Rerum nam atque adipisci reprehenderit
               porro placeat doloribus laudantium sint explicabo consectetur repellendus, iusto
                tenetur ipsa, odit labore, libero facere quibusdam! In! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque,
                ipsum illum reprehenderit, est illo dolorum ipsam fugit, quasi sapiente officiis
                atque. Natus molestiae dolorem porro iure, fuga quia repellat incidunt. Lorem ipsum 
                dolor sit, amet consectetur adipisicing elit. Rerum nam atque adipisci reprehenderit
                 porro placeat doloribus laudantium sint explicabo consectetur repellendus, iusto
                  tenetur ipsa, odit labore, libero facere quibusdam! In!</p>
                  <button class="OGJoin">Join</button>
    </div>

    <img class="OGIMg" src="AboutImages/pexels-andrea-piacquadio-774909.jpg" alt="">

</section>

<section id="HowItWorksSection">
    <div class="HIWTitleUnit">
        <div class="HIWRec"></div>
        <h4 class="HIWHeader">HOW IT WORKS</h4>
        

    </div>
    
    <div class="HIWImage"></div>
    <div class="HIWAnglediv1"></div>
    <div class="HIWAnglediv2"></div>
    <div class="HIWAnglediv3">
        <span>Its all 5 easy steps!</span>
        <p>
            1. Search. Your business needs it, our freelancers can make it. With advanced search options, getting what you want just got a lot easier<br>
            2. Choose. Keep your standards high and your brand aligned by reading reviews and screening work samples to help you meet your perfectmatch<br>
            3. Get specific. Contact your chosen seller to share your requirements and get the right results.<br>
            4. Place an order. Now get back to work while your Fiverr freelancers work for you.<br>
            5. Ding dong – delivery! Your finished order will arrive right in your inbox. Give your stamp of approval and get ready for the next great thing.
        </p>
    </div>

</section>

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
        Submenua1.href="About.php";
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

</script>