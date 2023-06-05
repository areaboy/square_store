<?php
error_reporting(0);

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
	
session_start();
$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session1'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session1'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session1'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session1'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session1'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session1'], ENT_QUOTES, "UTF-8"));
$customer_id_sess = $_SESSION['user_customer_id_session1'];
                  



include('data6rst.php');


$postid= strip_tags($_POST['postid']);

/*
$fullname= strip_tags($_POST['fullname']);
$email= strip_tags($_POST['email']);
$customer_id= strip_tags($_POST['customer_id']);
*/







$result = $db->prepare("SELECT * FROM store where id=:id");
$result->execute(array(':id' =>$postid));

echo $nosofrows = $result->rowCount();

$row = $result->fetch();

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



$timer = time();

$statement = $db->prepare('INSERT INTO store_fetch(
title, 
description,
timing,
fullname,
userid,
price,
currency,
customer_id,
post_image,
video_type,
video_url,
data
)

  values
(:title, 
:description,
:timing,
:fullname,
:userid,
:price,
:currency,
:customer_id,
:post_image,
:video_type,
:video_url,
:data

)');

$statement->execute(array( 

':title' => $title, 
':description' => $description,
':timing' => $timer, 
':fullname' => $fullname_sess,
':userid' =>$userid_sess,
':price' =>  $price,
':currency' =>  $currency,
':customer_id' => $customer_id_sess,
':post_image' => $images,
':video_type' => $video_type,
':video_url' => $video_id,
':data' => $email_sess

));



if($statement){




echo "<script>alert('Tik Tok Processed');</script>";
echo "<script>window.open('https://www.tiktok.com/@oolysisgood123455666/video/$video_id', '_blank');</script>";

}
else{
	
echo "<script>alert('failed');</script>";
	
}


}

?>