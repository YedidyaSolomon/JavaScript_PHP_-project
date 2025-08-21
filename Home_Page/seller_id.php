<?php
                
                 $_SESSION['seller_id']=$_POST['seller_id'];
               
                $seller_id=$_SESSION['seller_id'];
                $_SESSION['seller_id'];
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
                $sql= "SELECT * from seller s,price_details pd,star_reviews sr
                        where s.seller_id= pd.seller_id and 
                        pd.seller_id=sr.seller_id and 
                        s.seller_id='$seller_id'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $data[]=$row;
                       
                    }
                }
                

                ?>