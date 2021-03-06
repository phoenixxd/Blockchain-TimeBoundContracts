<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="style1.css">
		<script src ="js/jquery.js"></script>
		<script src ="js/bootstrap.js"></script>
	</head>
	<body>
		<div id="form">
<div class="container">
<div class="col-lg-6 col-lg-offset-3">
<div id="userform">
<ul class="nav nav-tabs nav-justified" role="tablist">
<li class="active"><a href="#signup"   role="tab" data-toggle="tab">Sign up as a Consumer </a></li>
<li><a href="#login"  role="tab" data-toggle="tab">Sign up as a Contractor </a></li>
</ul>
<!-- The first one -->

<div class="tab-content">
<div class="tab-pane fade active in" id="signup">
<h2 class="text-center"> Fill the Sign Up form</h2>
<form id="signup" method="post" action="register.php">


<div class="form-group">
<span class="req"></span>
<input type="text" class="form-control" placeholder="Name" name="consumer_name" id="email" required data-validatsion-required-message="Please enter your email address." autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group">
<span class="req"></span>
<input type="text" class="form-control" id="userid" placeholder="User ID" name="consumer_userid" required data-validatsion-required-message="Please enter your email address." autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group">
<span class="req"></span> 
<input type="email" class="form-control" id="email" placeholder="Email" name="consumer_email" required data-validation-required-message="Please enter your email address." autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group">
<!--<label> Your Phone<span class="req">*</span> </label> -->
<span class="req"></span> 
<input type="tel" class="form-control" id="phone" placeholder="Contact No." name="consumer_contact"required data-validation-required-message="Please enter your phone number." autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group">
<!--<label> Password<span class="req">*</span> </label> -->
<span class="req"></span> 
<input type="password" class="form-control" id="password" placeholder="Password" name="consumer_password"required data-validation-required-message="Please enter your password" autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="mrgn-30-top">
<input  type="submit" name= "submit_consumer"class="btn btn-larger btn-block"/>


</div>
</form>
</div>

<!-- Till now the code is working-->

<div class="tab-pane fade in" id="login">
<h2 class="text-center"> Fill the Form </h2>
<form id="login" method="post" action="register.php">


<div class="form-group">
<!--<label> Name<span class="req">*</span> </label> -->
<span class="req"></span> 
<input type="text" placeholder="Name" class="form-control" name="contractor_name" id="email" required data-validatsion-required-message="Please enter your email address." autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group">
<!--<label> User Id<span class="req">*</span> </label>-->
<span class="req"></span> 
<input type="text" class="form-control" placeholder="UserID" id="email" name="contractor_userid" required data-validatsion-required-message="Please enter your email address." autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group">
<!--<label> Your Email<span class="req">*</span> </label> -->
<span class="req"></span> 
<input type="email" class="form-control" placeholder="Your Email" id="email" name="contractor_email" required data-validation-required-message="Please enter your email address." autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group">
<!--<label> Your Phone<span class="req">*</span> </label>-->
<span class="req"></span> 
<input type="tel" class="form-control" placeholder="Contact No." id="phone" name="contractor_contact"required data-validation-required-message="Please enter your phone number." autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group">
<!--<label> <span class="req">*</span> </label> -->
<span class="req"></span> 
<input type="password" class="form-control" placeholder="password" id="password" name="contractor_password" required data-validation-required-message="Please enter your password" autocomplete="off">
<p class="help-block text-danger"></p>
</div>
<br>
<div class="form-group" >
<!--<label> Password<span class="req">*</span> </label>-->
<span class="req"></span> 
<input type="text" class="form-control " placeholder="Enter domain(Construction:Personal/Commercial, Construction/Manufacturing/Software Contract)" id="password" name="contractor_domain" required data-validation-required-message="Please enter your password" autocomplete="off">
<p class="help-block text-danger"></p>
</div>


<div class="mrgn-30-top">
<input  type="submit"value="submit" name= "submit_contractor"class="btn btn-larger btn-block"/>

</div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- /.container -->
</div>

	</body>
</html>