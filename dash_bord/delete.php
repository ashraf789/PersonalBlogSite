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
<?php
 		$sql = "DELETE FROM post WHERE id='".mysqli_real_escape_string($conn,$postId)."'";
 		if ($conn->query($sql) === TRUE) {
 		 	echo "<script> alert('successfuly delete your post');</script>";
            header('Location: modifyPost.php');
 		 } else{
            echo "<script> alert('data deletation faild');</script>";
         }
 		 
 ?>