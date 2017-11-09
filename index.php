<!DOCTYPE html>
<html lang="en">

<head>
    <div> 
        <?php include('resource.php');
        include('connection.php');
        ?> 
    </div>
    </head>
<body style="text-align: justify;">

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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php 
                        $sql = "Select id,heading,post_by,LEFT(date,10) as dateShort,LEFT(full_post,300) as subPost From post ORDER BY id DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                
                            
                    ?>
                <div class="post-preview">
                    <a <?php echo "href= full_post.php?id=".$row['id']?>>

                        <h2 class="post-title" style="color:#673ab7">
							<?php echo $row['heading']."<br>";
                            ?>
                        </h2>
                        <h4 class="post-subtitle">
                            <?php echo $row['subPost'].""."<br>";?>
                        </h4>
                        <STRONG style="color:#ab47bc">{Read More} </STRONG>
                    </a>
                    <p class="post-meta">Posted by <a href="#" style="color: #512da8"><?php echo $row['post_by']; ?></a> <?php echo $row['dateShort']; ?></p>
                </div>
                <hr>
                <?php } }?>
            
                <ul class="pager">
                    <li class="next">
                        <!-- <a href="#">Older Posts &rarr;</a> -->
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
