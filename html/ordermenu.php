<?php
session_start();
if (!(isset($_SESSION['username'])))
{
    header("Location: ../html/login.html");
}
?>

<html>

<head>
    <title>
        Rassasy
    </title>
    <link rel="stylesheet" href="../css/userhomepage.css">

</head>

<body>
    
    <div class="body">
        <div class="sidebar">
                <div class="header">Rassasy<br></div>
                <?php
                session_start();
                echo "Hey, ".$_SESSION[username];
                ?> </u>
                <hr>
            <a href="userhomepage.php">Ongoing Orders</a>
            <a href="ordernow.php">Order Now</a>
            <a href="pastorder.php">Past Orders</a>
            <a href="userprofile.php">Profile</a>
            <a href="../php/logout.php">Logout</a>
        </div>
        <div class="orders">
            <div class="content">
                `Canteen Name`'s menu :
                <table class="canteenmenu">
                    <tr class="canteen-menu-heading">
                        <th> Item No</th>
                        <th> Item Name</th>
                        <th> Price</th>
                        <th>Order</th>
                    </tr>
                    <tr class="canteen-menu-row">
                        <td> 01</td>
                        <td> Coffee</td>
                        <td> 15</td>
                        <td><button class="addtocart">Add</button></td>
                    </tr>
                </table>
            </div> </div>
    </div>
    <div class="footer">
        <div>Total Sum: </div>
        <div><a href="ordersummary.php">
        <button class="viewcart">View Cart</button></a></div>
    </div>
</body>

</html>