<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
// if (isset($_SESSION['email'])) {
//     header('location: products.php');
// }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Life Style Store</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            
        body {
        background-image: url('img./jungle.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }

        .main{
            border-radius: 3%;
            background-color: white;
            width: 36vw;
        }

        .row{
            display : flex;
            /* justify-content : center; */
            align-cintent: center;
            margin-left: 29vw;
            padding-bottom : 5px;
        }
        .panel {
             margin-top: 20px;
        }
        .panel-primary>.panel-heading {
            color: #fff;
            background-color: rgb(18, 170, 18);
            border-color: rgb(18, 170, 18);
        }
        .panel-primary {
              border-color: rgb(18, 170, 18);
        }

        .btn-primary {
            color: #fff;
            background-color: rgb(18, 170, 18);
            border-color: rgb(18, 170, 18);
        }

        a {
            color: rgb(18, 170, 18);
            text-decoration: none;
        }

        
        </style>
    </head>

    <body>
        <?php include 'includes/header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <!-- <div class="col-lg-4 col-md-6">
                    <img src="img/yess.jpg">
                </div> -->
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-3 col-md-4 main">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <center>
                                <h4>LOGIN</h4>
                                </center>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" autofocus="on" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>