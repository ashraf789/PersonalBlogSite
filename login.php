<!DOCTYPE html>
<?php  session_start(); ?>

<html lang="en">

<head>
    <?php include('resource.php');?>
</head>


<body align="center" style="height: auto;width: auto; background-color: #e3f2fd;">
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <?php include('navBar.php');?>        
    </nav>
    <div class="container" style="width: auto;height: auto; margin-top: 15%">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please sign in</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" name="login" type="submit" value="Login">
                            <br>
                        </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Footer -->
    <footer>
           <?php include('footer.php');?>  
    </footer>

    <?php include('allJequery.php');?>
</body>
</html>

<?php
include('connection.php');
 
 @$email=$_POST['email'];
 @$password=$_POST['password'];
 @$flag=0;

 if(isset($_POST['login'])){
       if ($email == null || $password == null || $email == " " || $password == " ") {
                echo "<script>alert('email and password can,t be empty')</script>";
          }else {
                $sql = "Select * From user";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($row['user_email'] == md5($email) &&  $row['user_password'] == md5($password)) {
                            $_SESSION['name']=$row['user_name'];
                            //header('Location: dash_bord/dashBoard.php');// problem in this line need to solve it
                            echo "<script> location.replace('dash_bord/dashBoard.php'); </script>";
                        }else{
                            //$flag  = 1;
                        }
                    }
                }
                if ($flag) {
                    echo "<script>alert('Wrong email or password ');</script>";
                }

          } 
  }
?>