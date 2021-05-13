<?php
$loginError = false;
if (!isset($_SESSION['Sadmin_id']) || $_SESSION['Sadmin_id'] == "" || $_SESSION['Sadmin_id'] == '0' || 
	!isset($_SESSION['Sadmin_username']) || $_SESSION['Sadmin_username'] == "" || $_SESSION['Sadmin_username'] == '0' ){
	$loginError = true;
}

// if ($loginError){
// 	exit('Sessie verlopen<meta http-equiv="refresh" content="2; URL='.BASEURL_CMS.'index.php">');
// }
?>