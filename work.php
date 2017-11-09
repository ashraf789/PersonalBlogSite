<!DOCTYPE html>
<html lang="en">

<head>

    <title>Our Portfolio</title>
    <div> <?php include('resource.php');?> </div>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <?php include('navBar.php');?>        
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/team_work05.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Team Work</h1>
                        <h2 class="subheading">“Talent wins games, but teamwork and intelligence wins championships.” -Michael Jordan</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                </div>
            </div>
        </div>
    </article>
        <section id="portfolio">
        <?php include('portfolio.php');?>
        <?php include('portfolio_details.php'); ?>
    </section>
    <hr>

    <!-- Footer -->
    <footer>
           <?php include('footer.php');?>  
    </footer>

    <?php include('allJequery.php');?>

</body>

</html>
