<?php  include("DBConn.php")?>
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
                <img src="\VC_Bookstore\Images\shopping_cart.png" alt="Shopping Cart" width="60" height="40" style="float: right; margin-right: 30px;">
                <b style="font-size: 20px; float: right; margin-right: 60px;">Customer Helpline: 012 345 6789</b>
            </div>
            <div class="Footer"></div>
            <div class="Top-Nav">
                <div class="topnav">
                    <a class="active" href="user_home.php"><b>Home</b></a>
                    <a>Add Listing</a>
                    <a >Shopping Cart</a>
                    <a href="studentLogin_form.php">Logout</a>
            </div>
            <div class="Top"><br>
                <h2>BUY or SELL Textbooks TODAY!</h2>
                <h3>Out online platform ensure a safe and secure network to but and sell second hand textbooks.</h3>
                <div class="search-container">
                    <input type="text" placeholder="Search.." name="search" id="search">
                    <button type="submit" id="btnSearch">Search</button>
                </div>
                <br><hr>
            </div>
            <div class="Body">
                <p><b>Textbook Listings:</b></p>
            </div>
            <div class="Form">
                <div class="row">
                    <div class="column">
                        <img src="\VC_Bookstore\Images\book1.jfif" alt="book1">
                        <p><b>R 450</b></p>
                    </div>
                    <div class="column">
                        <img src="\VC_Bookstore\Images\book2.jfif" alt="book2" >
                        <p><b>R 800</b></p>
                    </div>
                    <div class="column">
                        <img src="\VC_Bookstore\Images\book3.jfif" alt="book3">
                        <p><b>R 280</b></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="column">
                        <img src="\VC_Bookstore\Images\book4.jfif" alt="book4">
                        <p><b>R 250</b></p>
                    </div>
                    <div class="column">
                        <img src="\VC_Bookstore\Images\book5.jfif" alt="book5">
                        <p><b>R 390</b></p>
                    </div>
                    <div class="column">
                        <img src="\VC_Bookstore\Images\book6.jfif" alt="book6">
                        <p><b>R 400</b></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
