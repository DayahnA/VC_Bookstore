<?php include("DBConn.php")?>
<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <link rel="stylesheet" type="text/css" href="\VC_Bookstore\CSS\user.css">
        <link rel="stylesheet" type="text/css" href="\VC_Bookstore\CSS\nav_bar.css">
        <style>
            .container {
                grid-template-columns: 0.2fr 2.6fr 0.2fr; 
                grid-template-rows: 0.3fr 0.4fr 0.4fr 4.6fr 0.4fr; 
                gap: 0px 0px; 
            }
            .Heading { grid-area: 1 / 1 / 2 / 4; }
            .Footer { grid-area: 5 / 1 / 6 / 4; }
            .Top-Nav { grid-area: 2 / 1 / 3 / 4; }
            .Top { grid-area: 3 / 1 / 4 / 4; }
            .Body { grid-area: 4 / 1 / 5 / 4; }
            .Form { grid-area: 4 / 2 / 5 / 3; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="Heading">
                <b>Bookstore</b>
                <a href="shoppingCart.php"><img src="\VC_Bookstore\Images\shopping_cart.png" alt="Shopping Cart" width="60" height="40" style="float: right; margin-right: 30px;"></a>
                <b style="font-size: 20px; float: right; margin-right: 60px;">Customer Helpline: 012 345 6789</b>
            </div>
            <div class="Top-Nav">
                <div class="topnav">
                    <a  href="user_home.php"><b>Home</b></a>
                    <a href="user_addListing.php">Add Listing</a>
                    <a class="active"  href="shoppingCart.php">Shopping Cart</a>
                    <a href="studentLogin_form.php">Logout</a>
            </div>
            <div class="Top"><br>
            <a><a href="user_home.php"><button id="shop" style="float: left;"><< 'Continue Shopping</button></a>
                <h2>Shopping Cart</h2>
                <br><hr>
            </div>
            <div class="Body"></div>
                <div class="Form">
                    <label>Please note that all transactions made are secure and all of your information will remain private.<br><br></label>
                    <table>
            <tr>
                <th></th>
                <th><a>Title:</a></th>
                <th><a>Price:</a></th>
            </tr>
            <tr>
                <td><img src="\VC_Bookstore\Images\book1.jfif" alt="book1" width="25%"></td>
                <td>Database principles</td>
                <td>R450</td>
            </tr>
            <tr>
                <td><img src="\VC_Bookstore\Images\book2.jfif" alt="book2" width="25%"></td>
                <td>Pro C# 7</td>
                <td>R800</td>
            </tr>
        </table><br><br>

        <table>
                <tr>
                    <td>Subtotal:</td>
                    <td>R630</td>
                </tr>
                <tr>
                    <td>Delivery:</td>
                    <td>R70</td>
                </tr>
                <tr>
                    <td><b>Total:</b></td>
                    <td>R700</td>
                </tr>
    
    
        </table>

                <a><a href="PURCHASEPAGE.php"><button id="checkout">Checkout</button></a>
                <br>
                <br>
                <br>
                </div>
            </div>
            <div class="Footer">
                <hr>
                <p>©Copyright. All rights reserved. VC Bookstore 2022.</p>
            </div>
        </div>
    </body>
    
</html>