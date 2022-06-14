<!DOCTYPE html>
<html>
    <!--<head>
        <title>VC Bookstore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\PURCHASEPAGECSS.css">
        <style>
            
            .container {  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
  grid-template-rows: 0.7fr 0.8fr 0.7fr 2.2fr 1fr 0.6fr;
  gap: 0px 0px;
  grid-auto-flow: row;
}

.footer { grid-area: 6 / 1 / 7 / 7; }

.heading { grid-area: 1 / 1 / 2 / 7; }

.top { grid-area: 2 / 1 / 3 / 7; }

.body { grid-area: 3 / 2 / 6 / 6; }

.label { grid-area: 3 / 2 / 4 / 6; }

.button { grid-area: 5 / 2 / 6 / 6; }

.table { grid-area: 4 / 2 / 5 / 5; }

.lock { grid-area: 4 / 6 / 5 / 7; }


        </style>

         

    </head>
    <body>
        <div class="container">
            <div class="heading">
            Book Store &emsp; Customer helpline: 012 345 678 &emsp;
            <img src="img/shopcart.png" width="75" height="75">
            </div>
            
            <div class="body">
            <label><b>To purchase your items please make a EFT to the following account:</b></label><Br><Br>

            <table>
<tr>
                <th></th>
                <th></th>
        </tr>
        <tr>
                <td><b>Bank:</b></td>
                <td></td>
        </tr>
        <tr>
                <td><b>Name:</b></td>
                <td></td>
        </tr>
        <tr>
                <td><b>Account number:</b></td>
                <td></td>
        </tr>
        <tr>
                <td><b>Branch code:</b></td>
                <td></td>
        </tr>
        <tr>
                <td><b>Account type:</b></td>
                <td></td>
        </tr>
        <tr>
                <td><b>Email:</b></td>
                <td></td>
        </tr>
        
            </table>
                    

                    
                <a><a href="SHOPCARTPAGE.php"><button>Back</button></a>
                <a><input type="button" name="cs" id="cs" value="Contact seller"></a>
            </div>
            
            <div class="top">
            <img src="img/arrow-25858_960_720.png" width="100" height="100">  
            Checkout</div>

            <div class="lock">
            <img src="img/lock.png" width="75" height="75"><Br>
                    Your information is safe with us!</div>
            
            
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
            Checkout</h2>
                
                <br><hr>
            </div>
            <div class="Body">
            
            </div>
            <div class="Form">
            <label><b>To purchase your items please make a EFT to the following account:</b></label><Br><Br>

            <table>
<tr>
                <th></th>
                <th></th>
        </tr>
        <tr>
                <td><b>Bank:</b></td>
                <td>FNB/RNB</td>
        </tr>
        <tr>
                <td><b>Name:</b></td>
                <td>Danny</td>
        </tr>
        <tr>
                <td><b>Account number:</b></td>
                <td>224455667</td>
        </tr>
        <tr>
                <td><b>Branch code:</b></td>
                <td>250 655</td>
        </tr>
        <tr>
                <td><b>Account type:</b></td>
                <td>Transact acc</td>
        </tr>
        <tr>
                <td><b>Email:</b></td>
                <td>danny@gmail.com</td>
        </tr>
        
            </table><br><br>

            <img src="img/lock.png" width="75" height="75"><Br>
                    Your information is safe with us!<br><br>
                    
                 
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
    color: rgb(255, 255, 255);">Back</button></a>
                </div>
            </div>
        </div>
    </body>
</html>