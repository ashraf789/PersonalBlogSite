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
include('../resource.php');
include('../connection.php');

?> 
</div>
</head>
	
<body>
<?php include("menuBar.php");?>

 <div class="container" style="color: #00bcd4">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="margin-top: 10%">   
                <?php 
                    $sql = "Select *From post ORDER BY id DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { 
                ?>
                            
                <h3>
                    <?php  echo $row['heading'];  ?>
                    <?php echo '&nbsp&nbsp&nbsp <a href="edit.php?id='.$row['id'].'"';?>>Edit</a>
                    <?php echo '&nbsp&nbsp<a href="delete.php?id='.$row['id'].'"';?>>Delete</a>
                    
                    <?php }}?>
                </h3>

                <p class="help-block text-danger"></p>
            </div>
        </div>
</div>

</body>
</html>