

//youtube

$(document).ready(function(){



var vy  = 'Yout';



 if(vy==""){
alert('ok');
}


else{


$("#loader_youtube").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="loader.gif">&nbsp;Please Wait, Loading Content...</div>');
var datasend = {vy:vy};
	
		$.ajax({
			
			type:'POST',
			url:'http://localhost/square_store/store_fetch_youtube_tiktok.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader_youtube").hide();
$("#result_youtube").html(msg);
}
			
		});
		
		}


});

// youtube









//cash

$(document).ready(function(){
//$('#cash_btn').click(function(){
$(document).on( 'click', '.cash_btn', function(){ 
		
var qty = '1';

var currency = 'USD';

var postid = $(this).data('id');
var title = $(this).data('title');
var description = $(this).data('description');
var fullname = $(this).data('fullname');
var email = $(this).data('email');
var customer_id = $(this).data('customer_id');
var price = $(this).data('price');


if(qty==""){
alert('Please Select Quantity Of Products');
//return false;
}


else{
$('#loader_cash').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Processing Payments by Cash...</div>')



var datasend = {qty:qty,title: title, price: price,postid:postid, currency:currency,fullname:fullname,email:email,customer_id:customer_id};	
		$.ajax({
			
			type:'POST',
			url:'http://localhost/square_store/payments_cash.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_cash').hide();
$('#result_cash').html(msg);
setTimeout(function(){ $('#result_cash').html(''); }, 9000);

//$('#qty').val('');

			}
			
		});
		
		}
	
	})
					
});






//card

$(document).ready(function(){
//$('#card_btn').click(function(){
$(document).on( 'click', '.card_btn', function(){ 
		
var qty = '1';

var currency = 'USD';

var postid = $(this).data('id');
var title = $(this).data('title');
var description = $(this).data('description');
var fullname = $(this).data('fullname');
var email = $(this).data('email');
var customer_id = $(this).data('customer_id');
var price = $(this).data('price');

if(qty==""){
alert('Please Select Quantity Of Products');
//return false;
}


else{
$('#loader_card').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Processing Payments by Card...</div>')



var datasend = {qty:qty,title: title, price: price,postid:postid, currency:currency,fullname:fullname,email:email,customer_id:customer_id};	
		$.ajax({
			
			type:'POST',
			url:'http://localhost/square_store/payments_card.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_card').hide();
$('#result_card').html(msg);
setTimeout(function(){ $('#result_card').html(''); }, 9000);

//$('#qty').val('');

			}
			
		});
		
		}
	
	})
					
});







//Sqaure Gift card

$(document).ready(function(){
//$('#giftcard_btn').click(function(){

$(document).on( 'click', '.giftcard_btn', function(){ 
		
var qty = '1';

var currency = 'USD';

var postid = $(this).data('id');
var title = $(this).data('title');
var description = $(this).data('description');
var fullname = $(this).data('fullname');
var email = $(this).data('email');
var customer_id = $(this).data('customer_id');
var price = $(this).data('price');

if(qty==""){
alert('Please Select Quantity Of Products');
//return false;
}


else{
$('#loader_giftcard').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Processing Payments by Square Gift Card...</div>')



var datasend = {qty:qty,title: title, price: price,postid:postid, currency:currency,fullname:fullname,email:email,customer_id:customer_id};	
		$.ajax({
			
			type:'POST',
			url:'http://localhost/square_store/payments_giftcard.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_giftcard').hide();
$('#result_giftcard').html(msg);
setTimeout(function(){ $('#result_giftcard').html(''); }, 9000);

//$('#qty').val('');

			}
			
		});
		
		}
	
	})
					
});







//order

$(document).ready(function(){
//$('#order_btn').click(function(){
		

$(document).on( 'click', '.order_btn', function(){ 
		
var qty = '1';

var currency = 'USD';

var postid = $(this).data('id');
var title = $(this).data('title');
var description = $(this).data('description');
var fullname = $(this).data('fullname');
var email = $(this).data('email');
var customer_id = $(this).data('customer_id');
var price = $(this).data('price');

var due_date =$(".due_date").val();

if(qty==""){
alert('Please Select Quantity Of Products');
//return false;
}


else if(due_date==""){
alert('please Select Order/Donation Payment Due Date');
}



else{
$('#loader_order').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif"> Please Wait! .Your Order is being Processed...</div>')



var datasend = {qty:qty,title: title, price: price,postid:postid, currency:currency,fullname:fullname,email:email,customer_id:customer_id, due_date:due_date};	
		$.ajax({
			
			type:'POST',
			url:'http://localhost/square_store/order_processing.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
 		
$('#loader_order').hide();
$('#result_order').html(msg);
//setTimeout(function(){ $('#result_order').html(''); }, 9000);

//$('#qty').val('');

			}
			
		});
		
		}
	
	})
					
});























