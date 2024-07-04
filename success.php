<?php

require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE user_item SET status=2 WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status= 1 ";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        body{
            background-color: rgb(197, 247, 195)
        }
        .jumbotron{
            background-color: rgb(18, 170, 18);
            color: white;
        }
        .jumbotron a{
            color: white;
            text-decoration: underline;
        }
        .jumbotron a:hover{
            color: blue;
            text-decoration: underline;
        }
    </style>
    <body>
        <?php include 'includes/header.php'; ?>

        <div class="container" id="content">
            <div class="jumbotron">
                    <h2 align="center">YAY!! Your order is confirmed. Thank you for shopping with us.</h2><hr>
                <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
            </div>
        </div>

    </body>
</html>