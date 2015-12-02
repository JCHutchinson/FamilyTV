<?php
include('connectDB.php');
?>

<?php

 $id = 12;
    $stmt = $conn->prepare('SELECT image FROM UserPics2 WHERE userid = ?');
	$stmt->bind_param("i", $id);
	
	$stmt->execute();
	
	$stmt->bind_result($col1);
	
	while ($stmt->fetch()) {
        //printf("%s \n", $col1);
		 echo '<div class="col-md-3 img-library"><img src="data:image/jpeg;base64,'.base64_encode( $col1 ).'"/></div>';
    }
	
    //header("Content-type: image/jpeg");
    //echo '<img src="data:image/jpeg;base64,'.base64_encode( $col1 ).'" style="width: 300px; height: 300px;"/>';
  
	
$stmt->close();	
$conn->close();



?>
