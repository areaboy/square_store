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



$currency= strip_tags($_POST['currency']);
$title = strip_tags($_POST['title']);
$desc = strip_tags($_POST['desc']);
$price = strip_tags($_POST['price']);
$video_type = strip_tags($_POST['ptype']);
$video_url = strip_tags($_POST['video_url']);
$image = strip_tags($_POST['image']);
$timer = time();

include('data6rst.php');

$statement = $db->prepare('INSERT INTO store(
title, 
description,
timing,
fullname,
userid,
price,
currency,
comments,
post_image,
video_type,
video_url
)

  values
(:title, 
:description,
:timing,
:fullname,
:userid,
:price,
:currency,
:comments,
:post_image,
:video_type,
:video_url

)');

$statement->execute(array( 

':title' => $title, 
':description' => $desc,
':timing' => $timer, 
':fullname' => $fullname_sess,
':userid' =>$userid_sess,
':price' =>  $price,
':currency' =>  $currency,
':comments' => '0',
':post_image' => $image,
':video_type' => $video_type,
':video_url' => $video_url,

));



if($statement){

echo "<div style='background:green;color:white;padding:10px;border:none'>
Posts successfully published</div>";

echo "<script>alert('Posts successfully published');</script>";
echo "<script>location.reload();</script>";


}
else{
	
	echo "<div style='background:red;color:white;padding:10px;border:none'>
Data Could not be submitted</div>";
	
}


}

?>