<?php
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | ife Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="background-size:cover; background-image:url(https://img.freepik.com/free-photo/popular-potted-houseplants-white-background_53876-127000.jpg?w=740&t=st=1699096849~exp=1699097449~hmac=779c37e1e35855fbb9acaca49aed7f88a79a388a8bb11f1796727a9449909caa);">
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <!-- <div class="col-lg-4 col-md-6 ">
                    <img src="img/confirmorder.png" style="float: left;">
                </div> -->
            <div class="row decor_bg" style="    display: flex;
            justify-content: center;
            align-items: center;
        }">
                <div class="col-md-6" style="border: 0.1px solid grey; background-color: white; border-radius:5px">
                    <table class="table table-striped">
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;$id='';
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id As id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' and `status`=1";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {

                            echo "Heyy!! Your Cart is Empty. Please add items to the cart first!";
                        }
                        ?>
                        
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>