<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clean Blog - Contact</title>

    <?php include('resource.php');?>
    <?php
    	include('connection.php');
    ?>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <?php include('navBar.php');?>        
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-color: #0d3b66"> <!-- background-image: url('img/contact-bg.jpg') -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Contact With Us</h1>
                        <hr class="small">
                        <span class="subheading">Have any questions? We have answers (maybe).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Want to get in touch with ous? Fill out the form below to send ous a message and We will try to get back to you within 24 hours!</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage" id="contactForm" novalidate method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" name="userName" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" name="userEmail" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" name="userPhone" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" name="userMessage" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" name="send" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
           <?php include('footer.php');?>  
    </footer>

    <?php include('allJequery.php');?>

</body>

</html>

<?php

 @$valid_user = 0;
 @$sender_name = $_POST['userName'];
 @$sender_email = $_POST['userEmail'];
 @$sender_phone = $_POST['userPhone'];
 @$sender_message = $_POST['userMessage'];

 if(isset($_POST['send'])){
	
  if (!empty($sender_name) || !preg_match("/^[a-zA-Z ]*$/",$sender_name) || !empty($sender_email) || !filter_var($sender_email, FILTER_VALIDATE_EMAIL) || !empty($sender_phone)) {
    $valid_user = 1;
  } 

 	if($valid_user != 1)
 	{
 		echo "<script> alert('Invalid Data');</script>";
 	}
 	else
 	{
 		$sql = mysqli_query($conn,"INSERT INTO message(sender_name, sender_email, sender_phone,sender_message) VALUES ('".$sender_name."','".$sender_email."','".$sender_phone."','".$sender_message."')");

 		if ($sql) {
 		 	echo "<script> alert('Successfully sended your Message ');</script>";
 		 	header('Location: contact.php');
 		 } else{
            echo "<script> alert('Message Send Faild');</script>";
         }
 	}
 }

 ?>
