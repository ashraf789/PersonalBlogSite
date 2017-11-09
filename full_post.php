<!DOCTYPE html>
<html lang="en">

<head>
    <div> <?php include('resource.php');?> </div>
    <?php $postId = $_GET['id'];
    include('connection.php');?>
</head>
<body>

    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <title>Personal Blog</title>
        <?php include('navBar.php');?>        
    </nav>

    <!-- Page Header -->

    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-color: #0d3b66"> <!-- background-color: #0d3b66"  background-image: url('img/page-banner-2.png')-->

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading" style="padding-top: 100px; font-weight: 500">
                        <h1 style="font-weight: 500">Our Personal Blog</h1>
                        <hr class="small">
                        <span class="subheading">Team Hunter</span>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <!-- Main Content -->
    <div class="container" style="text-align: justify;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php 

                         $sql = "SELECT id,heading,post_by,LEFT(date,10) as dateShort,full_post FROM post WHERE id ='".mysqli_real_escape_string($conn,$postId)."'";// this escap string will prevent from sqli injection

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                               
                            
                    ?>
                <div class="post-preview">

                        <h2 class="post-title" style="color:#673ab7">
							<?php echo $row['heading']."<br>"; ?>
                        </h2>
                        <br> <br> <br> 
                        <h4 class="post-subtitle" >
                            <?php echo $row['full_post'].""."<br>"; ?>
                        </h4>
                    <p class="post-meta">Posted by <a href="#" style="color: #512da8"><?php echo $row['post_by']; ?></a> <?php echo $row['dateShort']; ?></p>
                </div>
                <hr>
                <?php } }?>
            
                <ul class="pager">
                    <li class="next">
                        <a href="index.php">Back &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
       <?php include('footer.php');?>
    </footer>

    <div>
        <?php include('allJequery.php');?>
    </div>
</body>

</html>
