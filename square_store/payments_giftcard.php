<?php
error_reporting(0);
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$fullname_sess = strip_tags($_POST['fullname']);
$email_sess = strip_tags($_POST['email']);
$customer_id_sess= strip_tags($_POST['customer_id']);

$qty= trim($_POST['qty']);
$title = strip_tags($_POST['title']);
$price = strip_tags($_POST['price']);

$postid = strip_tags($_POST['postid']);
$currency = strip_tags($_POST['currency']);


include('data6rst.php');
include('settings.php');

if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
echo "<script>alert('Please Ask Admin to Set Square Access Token at settings.php file')</script>";
exit();
}



$timer =time();



$titlex ="Purchase: $title";

$data_param= '{
    "idempotency_key": "'.$timer.'",
    "amount_money": {
      "currency": "'.$currency.'",
      "amount": '.$price.'
    },
    "buyer_email_address": "'.$email_sess.'",
    "source_id": "cnon:gift-card-nonce-ok",
 "note": "'.$titlex.'"
  }';





$url ="https://connect.squareupsandbox.com/v2/payments";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Square-Version: 2022-06-16', 'Content-Type: application/json', "Authorization: Bearer $square_accesstoken"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 


$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// catch error message before closing
if (curl_errno($ch)) {
    //echo $error_msg = curl_error($ch);
}

curl_close($ch); 




if($output ==''){

echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Please Ensure there is Internet Connections and Try Again</div><br>";
exit();
}


$json = json_decode($output, true);
$payment_id = $json['payment']['id'];
$status = $json['payment']['status'];
$order_id = $json['payment']['order_id'];


if($payment_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Payment Failed.   Please Ensure there is Internet Connections and Try Again</div><br>";
exit();

}





if($payment_id !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Payment Successful</div>";

echo "<script>alert('Payment Successful');</script>";
//echo "<script>location.reload();</script>";


}
else{
	
	echo "<div style='background:red;color:white;padding:10px;border:none'>Paymnts Failed...</div>";
	
}





?>