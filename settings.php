<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            body{
                background-color: rgb(197, 247, 195);
            }
            button{
                background-color: rgb(18, 170, 18);
                color: white;
            }
            button:hover{
                background-color: rgb(197, 247, 195);
                border: 1px solid rgb(18, 170, 18);
            }
        </style>
    </head>
    <?php include 'includes/header.php'; ?>
    <body>
        <div class="container" id="content">
            <div class="row">
                <div class="col-lg-6" id="settings-container">
                    <h1>Settings</h1>
                    <hr>
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn">Change</button>
                       <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>