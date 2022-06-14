<?php  
    include("DBConn.php");
    include("process_bookListing.php")
?>
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
            .Form1 { grid-area: 4 / 2 / 5 / 3; }
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
                    <a href="user_home.php"><b>Home</b></a>
                    <a class="active" href="user_addListing.php">Add Listing</a>
                    <a href="shoppingCart.php">Shopping Cart</a>
                    <a href="studentLogin_form.php">Logout</a>
            </div>
            <div class="Top"><br>
                <h2>Add New Listing</h2> 
                <label id="msg" style="color: green"><b><?php print ( isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ); ?></b></label>
                <label id="msg" style="color: red"><b><?php print ( isset($_SESSION['err_msg']) ? $_SESSION['err_msg'] : '' ); ?></b></label>
                <br><hr>
            </div>
            <div class="Body"></div>
            <div class="Form1">
                <br>
                <form id="book_form" action="" method="POST">
                <label><b>Book Title:</b></label>    
                    <input type="text" name="title" id="title" value="<?=$title?>" placeholder="Enter book title"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$title_error?></span> 
                    <br><br>    
                    <label><b>Author:</b></label>    
                    <input type="text" name="author" id="author" value="<?=$author?>" placeholder="Enter author"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$author_error?></span>    
                    <br><br>   
                    <label><b>Publisher:</b></label>    
                    <input type="text" name="publisher" id="publisher" value="<?=$publisher?>" placeholder="Enter publisher"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$publisher_error?></span>     
                    <br><br>    
                    <label><b>ISBN Number:</b></label>    
                    <input type="text" name="ISBN" id="ISBN" value="<?=$ISBN?>" placeholder="Enter ISBN"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$ISBN_error?></span>     
                    <br><br>     
                    <label><b>Price (R):</b></label>    
                    <input type="text" name="price" id="price" value="<?=$price?>" placeholder="Enter price"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$price_error?></span>        
                    <br><br> 
                    <label><b>Edition:</b></label> 
                    <select name="edition" id="edition">
                            <option value="first">1</option>
                            <option value="second">2</option>
                            <option value="third">3</option>
                            <option value="fourth">4</option>
                            <option value="fifth">5</option>
                            <option value="sixth">6</option>
                            <option value="seventh">7</option>
                    </select><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$edition_error?></span>        
                    <Br><Br>
                    <label><b>Condition:</b></label>    
                    <input type="text" name="condition" id="condition" value="<?=$condition?>" placeholder="Enter book condition"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$condition_error?></span>        
                    <br><br>  
                    <input type="button" name="back" id="back" value="Back" onclick="window.location.href='user_home.php'">
                    <button type="submit" name="save" id="save">Save</button>
                </form>
                <?php unset($_SESSION['msg']);?>
                <?php unset($_SESSION['err_msg']);?>
            </div>
            <div class="Footer">
                <hr>
                <p>©Copyright. All rights reserved. VC Bookstore 2022.</p>
            </div>
        </div>
    </body>
</html>