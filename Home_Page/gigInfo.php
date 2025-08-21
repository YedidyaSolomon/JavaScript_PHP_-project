<?php
include("seller_id.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gigInfo.css">
</head>
<body>
    <div class="Wrapper1" id="wrapper1">
        <div class="Head1">
            <header class="W1_Header">
                 <img src="Images/Your_paragraph_text__3_-removebg-preview 1.png" alt="" class="Logo" >
                </header>
            <nav class="W1_Nav">
                <ul class="W1_Nav_Ul">
                    <li class="Home"><a href="Home_page.php">Home</a></li>
                    <li class="About"><a href="About.php">About</a></li>
                    <li class="Sign_In"><a href="#" onclick="openSignIn(),nnbody()">Sign in</a></li>
                    <li class="Join"><button class="Join_button" onclick="location.href='SignUpPage1.php'">Join</button></li>
                </ul>
            </nav>
        </div>
        <div class="Head2">

            <form class="W1SearchBar" action="listonly.php" method="post">
                <input required class="W1_Input" name="W1_Input" type="text" placeholder="Search for any service...">
                <button class="W1_Button"><img src="Images/622669 1.png" alt=""></button>
            </form>

        </div>
        </div>


        <div id="gigInfo">

            <div id="gigDetails">
                <header id="mainHeader">
                    <h1 id="firsth1">I will design responsive wordpress landing page or elementor landing page</h1>
                    <div id="gigOwner">
                        <div id="gigOwnerLogo">

                        </div>
                        <div id="gigOwnerTitle">
                            <p id="gigOwnerName">Fantastic Designs</p>
                            <div class="gigRating"><img src="Images/star.png" alt="" style="width:15px;height:15px"><span id="ratingTxt">5</span><span id="customerNum">(123)</span></div>
                        </div>
                    </div>
                <main id="maindetails">
                    
                        <button class="slide_but" id="prevpic"></button>
                        <div id="gigpics">

                        </div>
                        <button class="slide_but" id="nextpic"></button>

                    <div id="aboutGig">
                        <p id="pdetails"></p>
                    </div>

                    <div id="ratingDetails">
                        <h1>Reviews</h1>
                        <span id="fivestarspan"><img src="Images/star.png" alt="" style="width:15px;height:15px">5 stars</span>
                            <div id="bar5">
                                <div id="barcol5"></div>
                            </div><br>
                        <span id="fourstarspan"><img src="Images/star.png" alt="" style="width:15px;height:15px">4 stars</span>
                            <div id="bar4">
                                <div id="barcol4"></div>
                            </div><br>
                        <span id="threestarspan"><img src="Images/star.png" alt="" style="width:15px;height:15px">3 stars</span>
                            <div id="bar3">
                                <div id="barcol3"></div>
                            </div><br>
                        <span id="twostarspan"><img src="Images/star.png" alt="" style="width:15px;height:15px">2 stars</span>
                            <div id="bar2">
                                <div id="barcol2"></div>
                            </div><br>
                        <span id="onestarspan"><img src="Images/star.png" alt="" style="width:15px;height:15px">1 stars</span>
                            <div id="bar1">
                                <div id="barcol1"></div>
                            </div><br>
                        
                    </div>
                </main>
                
                </header>

            </div>
            <div id="gigPriceOffers">
                <div id="priceContainor">
                    <div class="priceOffersButtons">
                        <button class="POButton" id="Basic">Basic</button>
                        <button class="POButton" id="Standard">Standard</button>
                        <button class="POButton" id="Premium">Premium</button>
                    </div>
                    
                    <div id="priceDetailsBasics">
                        <header id="priceHeaderBasic">
                            <h4 id="priceheader"></h4>
                            <span id="pricespan"></span>
                        </header>
                        <main class="priceDetailsMain" >
                            <p id="pricep"></p>
                            
                        </main>
                        <button >Select Offer</button>
                    </div>
                </div>
            </div>

    </div>
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

    
var data=<?php echo json_encode($data);?>;
var gigpics=document.getElementById('gigpics');
var firsth1=document.getElementById('firsth1');
var gigOwnerName=document.getElementById('gigOwnerName');
var Details=document.getElementById('pdetails');
var gigOwnerLogo=document.getElementById('gigOwnerLogo');
var slide_but=document.querySelectorAll(".slide_but");
var priceOffersButtons=document.querySelectorAll(".POButton");
var priceheader=document.getElementById('priceheader');
var pricespan=document.getElementById('pricespan');
var pricep=document.getElementById('pricep');
var gigpics=document.getElementById('gigpics');
var Basic=document.getElementById('Basic');
var Standard=document.getElementById('Standard');
var Premium=document.getElementById('Premium');
var bar5=document.getElementById('bar5');
var barcol5=document.getElementById('barcol5');
var barcol4=document.getElementById('barcol4');
var barcol3=document.getElementById('barcol3');
var barcol2=document.getElementById('barcol2');
var barcol1=document.getElementById('barcol1');
var customerNum=document.getElementById('customerNum');
var fivestarspan=document.getElementById('fivestarspan');
var fourstarspan=document.getElementById('fourstarspan');
var threestarspan=document.getElementById('threestarspan');
var twostarspan=document.getElementById('twostarspan');
var onestarspan=document.getElementById('onestarspan');
var imagestoragearray=[];
var pageindex=0;

firsth1.textContent=data[0].sevice_description;
gigOwnerName.textContent=data[0].seller_name;
Details.textContent=data[0].Details;
gigOwnerLogo.style.backgroundImage="url('images/"+data[0].img1+"')";
gigpics.style.backgroundImage="url('images/"+data[0].img1+"')";
priceheader.textContent=data[0].basic_header;
pricespan.textContent=data[0].basic_price;
pricep.textContent=data[0].basic_details;
imagestoragearray.push(data[0].img1);
imagestoragearray.push(data[0].img2);
imagestoragearray.push(data[0].img3);

slide_but.forEach(button=>{
    button.addEventListener("click",()=>{
                if(button.id=="prevpic" && pageindex>0){
                    pageindex--;
                }else if(button.id=="nextpic" && pageindex<imagestoragearray.length-1){
                    pageindex++;
                
                }

                // if(pageindex==x.length-1){
                //     button.style.visibility="hidden";
                // }else if(pageindex==0){
                //     button.style.visibility="hidden";
                // }
                
                

                gigpics.style.backgroundImage="url('images/"+imagestoragearray[pageindex]+"')";

            })
})

priceOffersButtons.forEach(button=>{
    button.addEventListener("click",()=>{
                button.style.background="black"
                button.style.color="white"
                if(button.id=="Basic"){
                    priceheader.textContent=data[0].basic_header;
                    pricespan.textContent=data[0].basic_price;
                    pricep.textContent=data[0].basic_details;
                    Standard.style.background="White"
                    Standard.style.color="black"
                    Premium.style.background="White"
                    Premium.style.color="black"
                }else if(button.id=="Standard"){
                    priceheader.textContent=data[0].standard_header;
                    pricespan.textContent=data[0].standard_price;
                    pricep.textContent=data[0].standard_details;
                    Premium.style.background="White"
                    Premium.style.color="black"
                    Basic.style.background="White"
                    Basic.style.color="black"
                }else{
                    priceheader.textContent=data[0].premium_header;
                    pricespan.textContent=data[0].premium_price;
                    pricep.textContent=data[0].premium_details;
                    Standard.style.background="White"
                    Standard.style.color="black"
                    Basic.style.background="White"
                    Basic.style.color="black"
                }
            })
})
var widthi=parseInt(bar5.clientWidth);
var sum=parseInt(data[0].five_stars)+parseInt(data[0].four_stars)
+parseInt(data[0].three_stars)+parseInt(data[0].two_stars)+parseInt(data[0].one_stars);

barcol5.style.width=(widthi*parseInt(data[0].five_stars)/sum)+'px';
barcol4.style.width=(widthi*parseInt(data[0].four_stars)/sum)+'px';
barcol3.style.width=(widthi*parseInt(data[0].three_stars)/sum)+'px'
barcol2.style.width=(widthi*parseInt(data[0].two_stars)/sum)+'px'
barcol1.style.width=(widthi*parseInt(data[0].one_stars)/sum)+'px'
customerNum.textContent="("+sum+")";
ratingTxt.textContent=Math.round((5*parseInt(data[0].five_stars)+4*parseInt(data[0].four_stars)+3*parseInt(data[0].three_stars)+2*parseInt(data[0].two_stars)+1*parseInt(data[0].one_stars))/sum * 10) / 10;
fivestarspan.textContent+="("+data[0].five_stars+")";
fourstarspan.textContent+="("+data[0].four_stars+")";
threestarspan.textContent+="("+data[0].three_stars+")";
twostarspan.textContent+="("+data[0].two_stars+")";
onestarspan.textContent+="("+data[0].one_stars+")";


</script>