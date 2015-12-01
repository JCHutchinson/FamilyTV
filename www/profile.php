<?php
include('header.php');
?>

<div id="nav2">
	<p id="logo">FamilyTV</p>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#section1">About Us</a></li>
		<li><a href="#section2">The Story</a></li>
		<li><a href="#section3">Section 3</a></li>
		<li><a href="./1353/fbconfig.php">Login</a></li>
	</ul>
</div>

<div id="profile-container">

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
