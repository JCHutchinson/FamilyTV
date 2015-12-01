<?php 

	$servername="p3plcpnl0758.prod.phx3.secureserver.net";
	$username="familyTvOwner";
	$password="familyTvProject";
	$dbname="familytv_database1";
	
			
	$conn = new mysqli($servername, $username, $password, $dbname);

		    if($conn->connect_error)
				die("Connection failed: ".$conn->connect_error);
		    else
				echo "Connected successfully</br>";
	
?>