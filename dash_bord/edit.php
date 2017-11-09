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
    $postId = $_GET['id'];
?> 
</div>


</head>
	
<body>
<?php include("menuBar.php");?>
    
    <?php 

                         $sql = "SELECT * FROM post WHERE id ='".mysqli_real_escape_string($conn,$postId)."'";// this escap string will prevent from sqli injection

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>

    <div class="row" style="text-align: justify;" >
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <form name="sentMessage" id="contactForm" novalidate method="post">
                    
                    <h3 style="text-align: left; color: #9c27b0"><strong>Post Heading</strong></h3>
                    <div class="row control-group">
                        <div style="background-color: #f3e5f5" class="form-group col-xs-12 floating-label-form-group controls">
                            <input  name="heading" value="<?php echo $row['heading']?>" class="form-control" placeholder="Post Heading" required data-validation-required-message="Please Enter Post Heading">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <h3 style="text-align: left; color: #9c27b0"><strong>Full Post</strong></h3>
                    <div class="row control-group">
                        <div style="background-color: #f3e5f5" class="form-group col-xs-12 floating-label-form-group controls">
                            <textarea name="postFull" value="" class="form-control" id="message"  required data-validation-required-message="Please enter a message."><?php echo $row['full_post'] ;?></textarea>
                            <p class="help-block text-danger"></p>
                              <script>
                                CKEDITOR.replace('postFull');
                              </script>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <button style="background-color: #e1bee7" type="submit" name="update" class="btn btn-default">Update</button>
                        </div>
                    </div>
                </form>
            </div>
    </div>


<?php }}?>

</body>
</html>

<?php
 @$heading=$_POST['heading'];
 @$postFull=$_POST['postFull'];

 if(isset($_POST['update'])){
	
 	if($heading==null || $postFull==null )
 	{
 		echo " <script> alert('Please Insert Data First'); </script> ";
 	}
 	else{
 		$sql = "UPDATE post SET heading ='".$heading."',full_post='".$postFull."' WHERE id='".mysqli_real_escape_string($conn,$postId)."'";


        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Record updated successfully');</script>";
            echo "Record updated successfully";
        } else {
            echo "<script>alert('Error updating record: ');</script>";
            echo "Error updating record: " . $conn->error;
        }
 		    
 	}
 }


 ?>