<?php

include('header2.php');
include('./1353/fbconfig.php');

//session_start();


$request = new FacebookRequest(
  $session,
  'GET',
  '/{album-id}/photos'
);
$response = $request->execute();
$graphObject = $response->getGraphObject();

$image_name = $graphObject->getProperty('images');

$_SESSION['IMAGE'] = $image_name;


include('footer.php');
?>