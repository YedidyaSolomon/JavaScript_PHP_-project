<?php
// session_id("logininfo");
// session_start();
include('search.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listonly.css">
</head>
<body>
    <!-- <div class="menu">x<br>c<br>c</div> -->
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
    <div id="SearchList">
        <p class="SearchP">Search keyword: <span id="SearchWord">Web</span></p>
        <div id="wrapper">
            
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
    
    var Wrapper= document.getElementById("wrapper");
    var SearchWord=document.getElementById("SearchWord");
    SearchWord.textContent="<?php
    echo $_SESSION['searchkey'];
    ?>"
    var list_data=<?php echo json_encode($data) ?>;

for (let i = 0; i < list_data.length; i++) {

    var link=document.createElement('a')
    var item= document.createElement('form');
    var hidden_input= document.createElement('input');
    var details= document.createElement('div');
    var owner= document.createElement('p');
    var description= document.createElement('p');
    var price= document.createElement('p');
    // link.setAttribute("href","giginfo.php")
    link.className="link";
    item.className="item";
    owner.className="owner";
    description.className="description";
    details.className="details";
    // hidden_input.style.background="transparent";
    hidden_input.type="hidden";
    hidden_input.style.border="none";
    hidden_input.value=list_data[i].seller_id;
    hidden_input.name='seller_id';
    item.action="giginfo.php";
    item.method="post";
    Wrapper.append(link);
    link.append(item);
    item.append(details);
    item.append(hidden_input);
    details.append(owner);
    details.append(description);
    details.append(price);
    description.textContent=list_data[i].service_description;
    price.textContent=list_data[i].price;
    owner.textContent=list_data[i].seller_name;
    item.style.backgroundImage="url('images/"+list_data[i].image_file+"')";
    
}

const dd=document.querySelectorAll(".item")
dd.forEach(it=>{
           it.addEventListener("click",function(){
                console.log("yesss")
                it.submit();
            })
       
        })






</script>

