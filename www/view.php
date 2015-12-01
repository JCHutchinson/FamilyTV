<?php
include('header.php');
include('connectDB.php');
?>

<?php

 $id = 2;
    $stmt = $conn->prepare('SELECT image FROM UserPics2 WHERE id = ?');
	$stmt->bind_param("i", $id);
	
	$stmt->execute();
	
	$stmt->bind_result($col1);
	
	while ($stmt->fetch()) {
        //printf("%s \n", $col1);
		 echo '<img src="data:image/jpeg;base64,'.base64_encode( $col1 ).'" style="width: 300px; height: 300px;"/>';
    }
	
    //header("Content-type: image/jpeg");
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $col1 ).'" style="width: 300px; height: 300px;"/>';
  
	
$stmt->close();	
$conn->close();



?>

<?php
include('footer.php');
?>