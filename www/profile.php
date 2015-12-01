<?php

include('header.php');
//include('./1353/fbconfig.php');
session_start();
?>



<div id="nav2">

	<p id="logo">FamilyTV</p>

	<ul>

		<li><a href="index.php">Home</a></li>

		<li><a href="index.php">About Us</a></li>

		<li><a href="index.php">The Story</a></li>

		<li><a href="index.php">Section 3</a></li>

		<li><a href="./1353/logout.php">Logout</a></li>

	</ul>

</div>



<div id="profile-container">

<?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1>
  <p>Welcome to FamilyTV</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>
<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<div><a href="logout.php">Logout</a></div>
</ul></div></div>
    <?php else: ?>     <!-- Before login --> 
<!-- <div class="container">
<h1>Login with Facebook</h1>
           Not Connected
<div>
      <a href="fbconfig.php">Login with Facebook</a></div>
	 <div> <a href="http://www.krizna.com/general/login-with-facebook-using-php/"  title="Login with facebook">View Post</a>
	  </div>
      </div> -->
      <!-- this php code is to send the user to the homepage if the user is not logged in -->
      <!--<?php //header("Location: http://familytv.bridgeitsolutions.ca"); ?> //code to redirect user to main page for now-->
    <?php endif ?>



<p id="profile-title">Welcome to FamilyTV</p>



<br />

<br />



<div class="col-md-3">

	<img src="img/tempprofile.jpg" class="img-circle" style="width: 20vw;"/>

</div>



<div class="col-md-3 psection" style="background-color: #E2ECF6">

	<h3>Firstname LastName</h3> 

	<h3>Location</h3>

</div>

<div class="col-md-3 psection" style="background-color: #74959A">

	<h3> Check/Edit list of devices</h3>

	<p>You currently have 0 Devices connected</p>

	 <input type="submit" value="Submit">

</div>

<div class="col-md-3 psection" style="background-color: #E2ECF6;">

	<h3>Upload an image from desktop</h3>

	<h3>View Images</h3>

</div>



<div></div>

<div></div>



</div><!-- END OF PROFILE CONTAINER -->



<?php

include('footer.php');

?>

