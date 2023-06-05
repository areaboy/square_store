

<?php
error_reporting(0);
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


?>











            <?php

// where video_type='youtube'

include('data6rst.php');
$result = $db->prepare("SELECT * FROM store_fetch order by id desc limit 1");
$result->execute(array());





$nosofrows = $result->rowCount();
if($nosofrows == 0){
echo "<div style='background:red;color:white;padding:10px;'>No Products/Video has been published yet..</div>";
exit();
}



while($row = $result->fetch()){

                $id= $row['id'];
                $postid = $row['id'];
                $title = $row['title'];
                $description = $row['description'];
                $timing = $row['timing'];
                $fullname =$row['fullname'];
                $photo = $row['photo'];
                $userid = $row['userid'];
                $currency = $row['currency'];
$price = $row['price'];
$customer_id = $row['customer_id'];          
$images = $row['post_image']; 
$video_type = $row['video_type'];   
$video_id = $row['video_url'];  
$email = $row['data'];        

   // }





            ?>
             


                



<div  class='well col-sm-12'>

<span id='loader_xp'></span>
<span id='result_xp'></span>

<b style='font-size:26px;'>Title: <?php echo $title; ?></b> <br>

<b style='font-size:20px;'> <?php echo $price; ?>(<?php echo $currency; ?>)</b> <br>


<div class='col-sm-6'>
 <h3>Products Images/Ads in Video</h3>
<img class='' style=' width:300px;height:300px; max-width:300px;max-height:300px;border-radius:' src='http://localhost/square_store/video_ads_images/<?php echo $images; ?>'><br>

</div>





<div class='col-sm-12'>.</div>

<span id="loader_cash" class=''></span>
                        <span id="result_cash" class=''></span>

<button id="cash_btn" class="cash_btn help_css" title="Buy Via Cash" 
data-title="<?php echo $title; ?>" 
 data-id="<?php echo $id; ?>" 
 data-description="<?php echo $description; ?>" 
data-fullname="<?php echo $fullname; ?>"
 data-email="<?php echo $email; ?>"
 data-customer_id="<?php echo $customer_id; ?>"
 data-price="<?php echo $price; ?>" 

>Buy Via Cash</button>





                        <span id="loader_card" class=''></span>
                        <span id="result_card" class=''></span>


<button type="button" id="card_btn" class="card_btn help_css" title='Buy Via Card' 

data-title="<?php echo $title; ?>" 
 data-id="<?php echo $id; ?>" 
 data-description="<?php echo $description; ?>" 
data-fullname="<?php echo $fullname; ?>"
 data-email="<?php echo $email; ?>"
 data-customer_id="<?php echo $customer_id; ?>"
 data-price="<?php echo $price; ?>" 

 >Buy Via Card</button>





                        <span id="loader_giftcard" class=''></span>
                        <span id="result_giftcard" class=''></span>


<button type="button" id="giftcard_btn" class="giftcard_btn help_css" title='Buy Via Gift Card' 

data-title="<?php echo $title; ?>" 
 data-id="<?php echo $id; ?>" 
 data-description="<?php echo $description; ?>" 
data-fullname="<?php echo $fullname; ?>"
 data-email="<?php echo $email; ?>"
 data-customer_id="<?php echo $customer_id; ?>"
 data-price="<?php echo $price; ?>" 

 >Buy Via GiftCard</button>





<br><br>



<span style='color:red'>Assuming You don't have your <b>Cash, Credit Card, Square Gift Cards etc.</b> with You at the Moment,
 You Can Still Purchase by placing an <b>
Order</b>
 and we will send you a <b> Payments Invoice</b> on your Email to pay Later </span>
<br><br>


<div class="form-group">
              <label> Select Order/Donation Payment Due Date: </label>
              <input type="date" class="col-sm-12 form-control due_date" id="" name="due_date" placeholder="Order/Donation Payment Due Date">
            </div>



<div class="col-sm-12 form-group">
<center>

                        <div id="loader_order"></div>
                       
<button type="button" id="order_btn" class="order_btn order help_css" title='Place Order & Recieve Invoice to Pay Later' 


data-title="<?php echo $title; ?>" 
 data-id="<?php echo $id; ?>" 
 data-description="<?php echo $description; ?>" 
data-fullname="<?php echo $fullname; ?>"
 data-email="<?php echo $email; ?>"
 data-customer_id="<?php echo $customer_id; ?>"
 data-price="<?php echo $price; ?>" 

 >Place Order & Recieve Invoice to Pay Later</button>

 <div id="result_order"></div>

</center>
</div>





</div>






            <?php
            }
            ?>
