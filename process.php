<?php
require("routeros_api.class.php");
$API = new routeros_api();
$API->debug=false;
$user_mikrotik = "Remoteadmin";
$password_mikrotik = "9686359";
$ip_mikrotik = "192.168.88.252";

if($API->connect($ip_mikrotik, $user_mikrotik, $password_mikrotik))
{$username 	= $_POST['username'];
$password 	= $_POST['password'];
$mac 		= $_POST['mac'];
$comment	= $_POST['phoneno'];
$API->comm("/ip/hotspot/user/add", array (
"server"		=>"hotspot1",
"name"			=> $username,
"password"		=> $password,
"profile"		=> "RasCom24hrs",
"mac-address"	=> $mac,
"comment"		=> $comment,
));
echo "<script>window.location='http://192.168.1.106/alogin.html'</script>";
}else{
	echo "Unable to connect"; 
}

?>
