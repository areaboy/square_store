

<?php
error_reporting(0);

session_start();


$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session1'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session1'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session1'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session1'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session1'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session1'], ENT_QUOTES, "UTF-8"));
$customer_id_sess = $_SESSION['user_customer_id_session1'];

$email_sess1 =  htmlentities(htmlentities($_SESSION['email1'], ENT_QUOTES, "UTF-8"));

?>



<script>


$(document).ready(function(){
$('.btn_youtube').click(function(){
//$(document).on( 'click', '.btn_youtube', function(){ 

var postid = $(this).data('id');
var title = $(this).data('title');
var description = $(this).data('description');
var fullname = $(this).data('fullname');
var email = $(this).data('email');
var customer_id = $(this).data('customer_id');
var video_id = $(this).data('video_id');

// set local storage
 localStorage.setItem('post_id_s', postid);
localStorage.setItem('customer_id_s', customer_id);
localStorage.setItem('fullname_s', fullname);
localStorage.setItem('email_s', email);

//window.location ='https://www.youtube.com/watch?v='+video_id;


$('#loader_xp').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Processing...</div>')

var datasend = {postid:postid,fullname:fullname, email:email, customer_id:customer_id};	
		$.ajax({
			
			type:'POST',
			url:'store_fetch.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_xp').hide();
$('#result_xp').html(msg);
setTimeout(function(){ $('#result_xp').html(''); }, 5000);


			}
			
		});






		
	})


});






// Tiktok



$(document).ready(function(){
$('.btn_tiktok').click(function(){
//$(document).on( 'click', '.btn_tiktok', function(){ 

var postid = $(this).data('id');
var title = $(this).data('title');
var description = $(this).data('description');
var fullname = $(this).data('fullname');
var email = $(this).data('email');
var customer_id = $(this).data('customer_id');
var video_id = $(this).data('video_id');

// set local storage
 localStorage.setItem('post_id_s', postid);
localStorage.setItem('customer_id_s', customer_id);
localStorage.setItem('fullname_s', fullname);
localStorage.setItem('email_s', email);


$('#loader_xp1').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Processing...</div>')

var datasend = {postid:postid,fullname:fullname, email:email, customer_id:customer_id};	
		$.ajax({
			
			type:'POST',
			url:'store_fetch2.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_xp1').hide();
$('#result_xp1').html(msg);
setTimeout(function(){ $('#result_xp1').html(''); }, 5000);


			}
			
		});






		
	})


});



</script>




       
<style>


.buy_btn1{
background: #1569C7;
color:white;
padding:10px;
border-radius:15%;

}


.buy_btn1:hover {
background: black;
color:pink;
}


.buy_btn2{
background: #800000;
color:white;
padding:10px;
border-radius:15%;

}


.buy_btn2:hover {
background: black;
color:pink;
}






</style>







<!--start loading post-->











<?php
error_reporting(0);
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

?>
       









<!--start loading post-->




<br><br>

<center><h1> Youtube Products</h1></center>






            <?php
//error_reporting(0);

include('data6rst.php');

//$userid_sess =  strip_tags($_POST['userid_sess']);



$result = $db->prepare("SELECT * FROM store where video_type='youtube' order by id desc");
$result->execute(array());





$nosofrows = $result->rowCount();
if($nosofrows == 0){
echo "<div style='background:red;color:white;padding:10px;'>No Youtube Products/Video has been published yet..</div>";
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
$comments = $row['comments'];          
$images = $row['post_image']; 
$video_type = $row['video_type'];   
$video_id = $row['video_url'];

    $microcontent = substr($description, 0, 450)."...";            

   // }





            ?>
             

   
                

<style>
.post_css1{
background:#ddd;
color:black;
border:none;
padding:10px;
border-radius:20%;
}


.post_css1:hover{
background:orange;
color:black;


}



.help_css{
background:#ddd;
color:black;
border:none;
padding:10px;
border-radius:20%;
font-size:16px;
}


.help_css:hover{
background:orange;
color:black;


}




.xcx1{
background-color: #ccc;
padding: 2px;
color:black;
font-size:14px;
border-radius: 10%;
border: none;
//cursor: pointer;
text-align: center;
height:280px;

}
.xcx1:hover {
background: orange;
color:white;
}	
</style>


<div class='well col-sm-12'>

<span id='loader_xp'></span>
<span id='result_xp'></span>


<button id=""  title="View & Buy From Youtube" data-title="<?php echo $title; ?>" data-email="<?php echo $email_sess; ?>" data-fullname="<?php echo $fullname_sess; ?>" 
 data-id="<?php echo $id; ?>"  data-description="<?php echo $description; ?>" data-customer_id="<?php echo $customer_id_sess; ?>"  data-video_id="<?php echo $video_id; ?>" 
class="btn_youtube pull-right btn btn-primary" >View & Buy From Youtube</button>


<b style='font-size:26px;'>Title: <?php echo $title; ?></b> <br>

<b style='font-size:20px;'> <?php echo $price; ?>(<?php echo $currency; ?>)</b> <br>
<b >Descriptions:</b>   <?php echo $description; ?>




<br>



<div class='col-sm-6'>
 <h3>Product Video</h3>
 <iframe width="300" height="300"
src="https://www.youtube.com/embed/<?php echo $video_id; ?>">
</iframe> 

</div>


<div class='col-sm-6'>
 <h3>Products Images/Ads in Video</h3>
<img class='' style=' width:300px;height:300px; max-width:300px;max-height:300px;border-radius:' src='video_ads_images/<?php echo $images; ?>'><br>

</div>




</div>






            <?php
            }
            ?>









<br><br>

<center><h1> Tik-Tok Products</h1></center>

















            <?php


//$userid_sess =  strip_tags($_POST['userid_sess']);



$result = $db->prepare("SELECT * FROM store where video_type='tiktok' order by id desc");
$result->execute(array());





$nosofrows = $result->rowCount();
if($nosofrows == 0){
echo "<div style='background:red;color:white;padding:10px;'>No Tiktok Products/Video has been published yet..</div>";
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
$comments = $row['comments'];          
$images = $row['post_image']; 
$video_type = $row['video_type'];   
$video_id = $row['video_url'];

    $microcontent = substr($description, 0, 450)."...";            

   // }





            ?>
             


<div class='well col-sm-12'>

<span id='loader_xp1'></span>
<span id='result_xp1'></span>


<button id=""  title="View & Buy From TikTok" data-title="<?php echo $title; ?>" data-email="<?php echo $email_sess; ?>" data-fullname="<?php echo $fullname_sess; ?>" 
 data-id="<?php echo $id; ?>"  data-description="<?php echo $description; ?>" data-customer_id="<?php echo $customer_id_sess; ?>"  data-video_id="<?php echo $video_id; ?>" 
class="btn_tiktok pull-right btn btn-primary" >View & Buy From Tik-Tok</button>


<b style='font-size:26px;'>Title: <?php echo $title; ?></b> <br>

<b style='font-size:20px;'> <?php echo $price; ?>(<?php echo $currency; ?>)</b> <br>
<b >Descriptions:</b>   <?php echo $description; ?>




<br>




<div class='col-sm-6'>
 <h3>Product Video</h3>

<blockquote class="tiktok-embed" cite="https://www.tiktok.com/@oolysisgood123455666/video/<?php echo $video_id; ?>" data-video-id="<?php echo $video_id; ?>"
 style="max-width: 500px;min-width: 300px;" > 

<section> 
<a target="_blank" title="@oolysisgood123455666" href="https://www.tiktok.com/@oolysisgood123455666?refer=embed">@oolysisgood123455666</a>
 <p>The Nature</p> <a target="_blank" title="? original sound cyborg" href="https://www.tiktok.com/music/original-sound-cyborg-0?refer=embed">?
 original sound cyborg</a> </section> </blockquote> 
<script async src="https://www.tiktok.com/embed.js"></script>


</div>


<div class='col-sm-6'>
 <h3>Products Images/Ads in Video</h3>
<img class='' style=' width:300px;height:300px; max-width:300px;max-height:300px;border-radius:' src='video_ads_images/<?php echo $images; ?>'><br>

</div>




</div>






            <?php
            }
            ?>





<!--End loading posts-->


<br><br><br>

















