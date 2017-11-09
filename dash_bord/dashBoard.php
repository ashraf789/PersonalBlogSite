<!DOCTYPE html>
<html lang="en">

<head>
<script src="script/option.js" type="text/javascript"> </script>
<script src="ckeditor/ckeditor.js" type="text/javascript"> </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dash Board</title>
	<link href="../css/clean-blog.css" rel="stylesheet" type="text/css">
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<div> 
<?php 
session_start();
include('../resource.php');
include('../connection.php');

$name = $_SESSION['name'];
if($name == null || $name ==" "){
        header('Location: ../index.php');
    }
?> 
</div>


</head>
	
<body>
<?php include("menuBar.php");?>
    
    <div class="row" style="text-align: center;">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <form name="sentMessage" id="contactForm" novalidate method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Post Heading</label>
                            <input name="heading" class="form-control" placeholder="Post Heading" required data-validation-required-message="Please Enter Post Heading">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Full Post</label>
                            <textarea rows="5" class="form-control" id="message" name="postFull" required data-validation-required-message="Please enter a message."></textarea>
                            <script>
                				CKEDITOR.replace('postFull');
          					  </script>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <button type="submit" name="uplode" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>

<?php
 @$name = $name;
 @$heading=$_POST['heading'];
 @$postFull=$_POST['postFull'];

 if(isset($_POST['uplode'])){
	
 	if($heading==null || $heading=='' || $postFull==null || $postFull=='')
 	{
 		echo " <script> alert('Please Insert Data First'); </script> ";
 	}
 	else{
 		$send = mysqli_query($conn,"INSERT INTO post(heading, full_post, post_by) VALUES ('".$heading."','".$postFull."','".$name."')");

 		if ($send) {
 		 	echo "<script> alert('successfuly published your new post');</script>";
 		 } else{
            echo "<script> alert('Data Send Faild');</script>";
            header('Location: dashBoard.php');

         }
 		    
 	}
 }


 ?>