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
                    <a href="SHOPCARTPAGE.php">Shopping Cart</a>
                    <a href="studentLogin_form.php">Logout</a>
            </div>
            <div class="Top"><br>
                <h2><img src="img/arrow-25858_960_720.png" width="100" height="100">  
            Banking details</h2>
                
                <br><hr>
            </div>
            <div class="Body">
            
            </div>
            <div class="Form">
            <label><b>Please make sure that your banking information is correct as it is neccessary for seller
                 to make payments to this account. All information will remain private.<b></label><Br><Br>

            <label><b>Bank:</b></label>
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
            <label><b>Name:</b></label>
            <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                    <label><b>Account number:</b></label>
                    <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                    <label><b>Branch code:</b></label>
                    <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                    <label><b>Account type:</b></label>
                    <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>

                 <img src="img/lock.png" width="75" height="75"><Br>
                    Your information is safe with us!<br><br>

                 
                 <a><a href="BOOKINFOPAGE.php"><button style="background-color: #1781C1;
    width: 100px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;
    margin-top: 30px;  
    color: rgb(255, 255, 255);">Done</button></a>
                </div>
            </div>
        </div>
    </body>
</html>