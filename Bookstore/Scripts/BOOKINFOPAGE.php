<!DOCTYPE html>
<html>
    <!--<head>
        <title>VC Bookstore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\BOOKINFOPAGECSS.css">
        <style>
            
            .container {  display: grid;
                grid-template-columns: 0.5fr 2.1fr 0.4fr;
                grid-template-rows: 0.3fr 0.5fr 3fr 0.2fr;
                gap: 0px 0px;
                grid-auto-flow: row;
            }

            .Heading { grid-area: 1 / 1 / 2 / 4; }
            .Body { grid-area: 2 / 1 / 4 / 4; }
            .Footer { grid-area: 4 / 2 / 5 / 4; }
            .Top { grid-area: 2 / 1 / 3 / 4; }
            .login { grid-area: 3 / 2 / 4 / 3; }
        </style>

         

    </head>
    <body>
        <div class="container">
            <div class="Heading">
            Book Store &emsp; Customer helpline: 012 345 678 &emsp;
            <img src="img/shopcart.png" width="75" height="75">
            </div>
            
            <div class="login">
            <label><b>Book Title:</b></label><Br><Br>
            <label><b>Price:</b></label><Br><Br>
                    <label><b>ISBN number:</b></label><Br><Br>
                    <label><b>Author:</b></label><Br><Br>
                    <label><b>Condition:</b></label><Br><Br>
                    <label><b>Edition:</b></label><Br><Br>
            </div>
            
            <div class="Top">
            <img src="img/arrow-25858_960_720.png" width="100" height="100">  
            Purchase Book</div>
            
            <div class="Footer">
            <Br><Br><a><input type="button" name="cs" id="cs" value="Contact seller"></a>
                <a><a href="SHOPCARTPAGE.php"><button>Add to Cart</button></a>
            </div>
        </div>
    </body>-->

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
                <h2><img src="img/arrow-25858_960_720.png" width="100" height="100">  
            Purchase Book</h2>
                
                <br><hr>
            </div>
            <div class="Body">
            
            </div>
            <div class="Form">
            <label><b>Book Title: <br><img src="\VC_Bookstore\Images\book1.jfif" alt="book1"></b></label><Br><Br>
            <label><b>Price:</b>R250</label><Br><Br>
                    <label><b>ISBN number:</b> 2287765667</label><Br><Br>
                    <label><b>Author:</b> Micheal Philips</label><Br><Br>
                    <label><b>Condition:</b> Excellent</label><Br><Br>
                    <label><b>Edition:</b> 3rd</label><Br><Br>

                 
                 <a><a href="BOOKINFOPAGE.php"><button style="background-color: #1781C1;
    width: 100px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;
    margin-top: 30px;  
    color: rgb(255, 255, 255);">Contact seller</button></a>

<a><a href="SHOPCARTPAGE.php"><button style="background-color: #1781C1;
    width: 100px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;
    margin-top: 30px;  
    color: rgb(255, 255, 255);">Add to Cart</button></a>
                </div>
            </div>
        </div>
    </body>
</html>