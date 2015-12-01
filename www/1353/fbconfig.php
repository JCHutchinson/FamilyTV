<?php
// include('../header.php');
  session_start();
  // added in v4.0.0
  require_once 'autoload.php';
  use Facebook\FacebookSession;
  use Facebook\FacebookRedirectLoginHelper;
  use Facebook\FacebookRequest;
  use Facebook\FacebookResponse;
  use Facebook\FacebookSDKException;
  use Facebook\FacebookRequestException;
  use Facebook\FacebookAuthorizationException;
  use Facebook\GraphObject;
  use Facebook\Entities\AccessToken;
  use Facebook\HttpClients\FacebookCurlHttpClient;
  use Facebook\HttpClients\FacebookHttpable;
  // init app with app id and secret
  FacebookSession::setDefaultApplication( '1027094570675741','ae8cf2747d22659c0998d13a739b54c7' );
  // login helper with redirect_uri
      $helper = new FacebookRedirectLoginHelper('http://familytv.bridgeitsolutions.ca/profile.php' );
      // $helper = new FacebookRedirectLoginHelper('Location: localhost/FamilyTV/www/profile.php' );
  try {
    $session = $helper->getSessionFromRedirect();
  } catch( FacebookRequestException $ex ) {
    // When Facebook returns an error
  } catch( Exception $ex ) {
    // When validation fails or other local issues
  }
  // see if we have a session
  if ( isset( $session ) ) {
    // graph api request for user data
    $request = new FacebookRequest( $session, 'GET', '/me' );
    $response = $request->execute();
    // get response
    $graphObject = $response->getGraphObject();

    $fbuname = $graphObject->getProperty('username'); //To get Facebook username

       	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
   	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
  	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
  	/* ---- Session Variables -----*/
  	    $_SESSION['FBID'] = $fbid;
        $_SESSION['USERNAME'] = $fbuname;
        $_SESSION['FULLNAME'] = $fbfullname;
  	    $_SESSION['EMAIL'] =  $femail;

        echo '<pre>' .print_r($graphObject, 1) . '</pre>';
      /* ---- header location after session ----*/
    // header("Location: ../profile.php");
  } else {
    //show login url
    echo '<a href=" ' .$helper->getLoginUrl().'">Login</a>';
//    $loginUrl = $helper->getLoginUrl();
   // header("Location: ".$loginUrl);
  }
?>