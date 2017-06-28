<?php
require "dbconn.php";
$csignup = 0;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MemeEra</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> 
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <header class="col-xs-16 col-sm-8 col-md-12"><h1><center>MemeEra</center></h1></header>

    <?php
    if($csignup == 1){
    ?>

    <div class="alert alert-success">
        <strong>Success!</strong> Sucessfully registered
    </div>
    <?php
        }
    ?>
    <div class="container-fluid bg-1 text-center">
        <img src="meme.jpg" alt="Meme Creator" class="img-circle hidden-xs" style="padding:10px">
        <h2>MemeEra</h2>
        <h3>MemeEra is a platform that binds the world of meme creators to change the world and convey the social messages through meme.</h3>
    </div>

    <div class="container-fluid bg-2 text-center">
        <form class="form-inline" method = "post" action = "login.php">
            <div class="form-group">
                <label  for="user_email">Email address</label>
                    <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email">
            </div>
            <div class="form-group">
                <label  for="user_password">Password</label>
                    <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-default" id="sign_in_btn" name="sign_in_btn">Sign in</button>
        </form>
        <br>
        <p>Not a meme creator yet sign up by clicking the below button</p>
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sign_up_modal">
            Sign up
        </button>
    </div>



<!-- Modal -->
<div class="modal fade" id="sign_up_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Enter all the details and sign up</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method = "post" action = "signup.php">
            <div class="form-group">
                <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                     </div>
            </div>
            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="last_name"  name = "last_name" placeholder="Last Name">
                     </div>
            </div>
            <div class="form-group">
                <label for="new_email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="new_email" name="new_email" placeholder="Email">
                    </div>
            </div>
            <div class="form-group">
                <label for="new_password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Password">
                     </div>
            </div>
        
     </div>
      <div class="modal-footer">
          <center>
        <button type="submit" class="btn btn-primary" name = "signup">Sign up</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button> 
        </center>
        </form>
      </div>
    </div>
  </div>
</div>


<footer class="container-fluid bg-4 text-center">
  <p>&copy; MemeEra.com</p> 
</footer>



  </body>
</html>