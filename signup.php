<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>

        body {
        background-image: url('img./settings_bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
        .row{
            display : flex;
            justify-content : center;
            align-cintent: center;
            margin-left: 29vw;
            padding-bottom : 5px;
        }
        .main{
            border-radius: 3%;
            background-color: white;
        }
        </style>
    </head>
    <body >
        <?php include  'includes/header.php'; ?>
        <div class="container-fluid decor_bg" id="content" >
            <!-- <div class="col-lg-4 col-md-6">
                <img src="img/signup1.jpg" style="width: 39vw;height: 74vh;">
            </div> -->
            <div class="row">
                <div class="container" style = "text-align : center;">
                    <div style="margin-left : 120px;" class="col-lg-4 col-lg-offset-3 col-md-6 main" >
                        <h2 style = "color:rgb(18, 170, 18)">SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" autofocus="on" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder=" Enter a valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact (ex. 8444844863)" maxlength="10" size="10" name="contact" required = "true"><?php if(isset($_GET['m2'])) echo $_GET['m2']; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary" style="background-color:rgb(18, 170, 18) ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>