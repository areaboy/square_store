


$(document).ready(function(){

 var sess_token =   sessionStorage.getItem("access_data1");
 var sess_rand =   sessionStorage.getItem("access_data2");
 var sess_fullname = sessionStorage.getItem("access_fullname");

//alert(sess_token);
//alert(sess_rand);
//alert(sess_fullname);


if (sess_token == null || sess_token == undefined) {

  alert('You Must Login To Access this Page');
window.location='index.html';
//return false;
}

$('.myd_fullname_sess').html(sess_fullname);


});

