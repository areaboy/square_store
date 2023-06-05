

<?php
	
//set session
if(!isset($_SESSION['user_id_session1']) || (trim($_SESSION['user_id_session1']) == '')) {
//$username=strip_tags($_GET['username']);
		header("location: index.php");
		exit();
	}


?>