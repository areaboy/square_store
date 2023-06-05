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
$due_date = strip_tags($_POST['due_date']);




//include('data6rst.php');
include('settings.php');

if($square_accesstoken ==''){
echo "<div  style='background:red;color:white;padding:10px;border:none;'>Please Ask Admin to Set Square Access Token at <b>settings.php</b> File</div><br>";
exit();
}


$timer =time();




$data_param= '{
    "order": {
      "location_id": "'.$location_id.'",
      "line_items": [
        {
          "name": "'.$title.'",
          "base_price_money": {
            "currency":  "'.$currency.'",
            "amount": '.$price.'
          },
          "quantity": "1"
        }
      ]
    },
    "idempotency_key": "'.$timer.'"
  }';



$url ="https://connect.squareupsandbox.com/v2/orders";

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
$order_id = $json['order']['id'];
$status = $json['order']['state'];
$version = $json['order']['version'];



if($order_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Order Creation Failed. Error: $output  </div><br>";
exit();

}




if($order_id !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Order Created Successful</div><br>";
}



// Create Invoice




$titlex ="Donation: $title";



$timer =time();


 //  "scheduled_at": "2023-06-03T04:02:03.861Z",

$data_param='{
    "invoice": {
      "accepted_payment_methods": {
        "card": true,
        "square_gift_card": true
      },
      "delivery_method": "EMAIL",
      "store_payment_method_enabled": true,
   
      "payment_requests": [
        {
          "request_type": "BALANCE",
          "due_date": "'.$due_date.'"
        }
      ],
      "description": "'.$titlex.'",
      "invoice_number": "'.$timer.'",
      "primary_recipient": {
        "customer_id": "'.$customer_id_sess.'"
      },
      "location_id": "'.$location_id.'",
      "order_id": "'.$order_id.'"
    }
  }';




$url ="https://connect.squareupsandbox.com/v2/invoices";

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
$invoice_id = $json['invoice']['id'];
$status = $json['invoice']['status'];
$version = $json['invoice']['version'];
$location_id = $json['invoice']['location_id'];
$invoice_number = $json['invoice']['invoice_number'];
$description = $json['invoice']['description'];
$created_at = $json['invoice']['created_at'];
$order_id = $json['invoice']['order_id'];
$amount = $json['invoice']['payment_requests']['computed_amount_money']['amount'];
$currency = $json['invoice']['payment_requests']['computed_amount_money']['currency'];


if($invoice_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Invoice Creation Failed. Error: $output  </div><br>";
exit();

}








if($invoice_id !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Invoice Created Successful</div><br>";

}




// Publish Invoice


//$version= trim($_POST['version']);
//$invoice_id= trim($_POST['invoice_id']);

$data_param='{
    "version":  '.$version.',
    "idempotency_key":  "'.$timer.'"
  }';

$url ="https://connect.squareupsandbox.com/v2/invoices/$invoice_id/publish";

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

$json = json_decode($output, true);
$invoice_id = $json['invoice']['id'];
//$status = $json['invoice']['status'];



if($invoice_id ==''){


echo "<div id='alertdata_uploadfiles_o' style='background:red;color:white;padding:10px;border:none;'>
 Invoice Publishing Failed. Error: $output  </div><br>";
exit();

}


if($invoice_id !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Invoice Successfully Published and sent to your Mail</div><br>";


}


















?>