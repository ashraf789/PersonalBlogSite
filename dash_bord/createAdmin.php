<!DOCTYPE html>
<html lang="en">

<head>
<script src="script/option.js" type="text/javascript"> </script>
<script src="ckeditor/ckeditor.js" type="text/javascript"> </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dash Board</title>
	<link href="../css/clean-blog.css" rel="stylesheet" type="text/css">
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<div> <?php include('../resource.php');
            include('../connection.php');?> </div>

</head>
	
<body>
 <?php include("menuBar.php");?>
<div class="container" style="width: auto;height: auto; margin-top: 15%">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please enter valid data</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="POST">
                    <fieldset>
                    	<div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <input class="btn btn-lg btn-success btn-block" name="create" type="submit" value="Create Admin">
                        <br>
                        
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
 @$name = $_POST['name'];
 @$email=$_POST['email'];
 @$password=$_POST['password'];

 if(isset($_POST['create'])){
       if ($email == null || $password == null || $email == " " || $password == " " || $name == null || $name == " ") {
                echo "<script>alert('Data field can,t be empty')</script>";
          }else {

			        $send = mysqli_query($conn,"INSERT INTO user(user_name,user_email,user_password) VALUES ('".$name."','".md5($email)."','".md5($password)."')");

			 		if ($send) {
         				

         				header('Location: dashBoard.php');
			 		 

			 		 } else{
			            echo "<script> alert('Data Send Faild');</script>";
         			}


          } 
  }
?>