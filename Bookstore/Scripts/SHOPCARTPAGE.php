<!DOCTYPE html>
<html>
    <!--<head>
        <title>VC Bookstore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\SHOPCARTPAGECSS.css">
        <style>
            
            .container {  display: grid;
  grid-template-columns: 0.6fr 1.4fr 0.8fr 1.6fr 0.6fr;
  grid-template-rows: 0.6fr 0.6fr 0.4fr 3fr 0.7fr 0.7fr;
  gap: 0px 0px;
  grid-auto-flow: row;
}

.header { grid-area: 1 / 1 / 2 / 6; }

.footer { grid-area: 6 / 2 / 7 / 5; }

.top { grid-area: 2 / 2 / 3 / 5; }

.body { grid-area: 3 / 2 / 6 / 5; }

.tot { grid-area: 5 / 4 / 6 / 5; }

.tab { grid-area: 4 / 2 / 5 / 5; }

.lab { grid-area: 3 / 2 / 4 / 5; }

.but { grid-area: 6 / 4 / 7 / 5; }

        </style>

         

    </head>
    <body>
        <div class="container">
            <div class="header">
            Book Store &emsp; Customer helpline: 012 345 678 &emsp;
            <img src="img/shopcart.png" width="75" height="75">
            </div>

            
            
            <div class="body">
            <div class="lab">
            <label>Please note that all transactions made are secure and all of your information will remain private.</label>
</div>
        
        
            
        <table>
            <tr>
                <th></th>
                <th><a>Title</a></th>
                <th><a>Price</a></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
            
        <div class="tot">
            
            <table>
                <tr>
                    <td>Subtotal:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Delivery:</td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Total:</b></td>
                    <td></td>
                </tr>
    
    
        </table>
        </div>
            
</div>   
            
            
            
            
            
            
            
            
            
            
            
            
           

            
            
            <div class="top">
            <img src="img/arrow-25858_960_720.png" width="100" height="100">  
            Shopping Cart</div>
            
            <div class="footer">
            <img src="img/arrow-25858_960_720.png" width="33" height="33">
            <a><a href="HOMEPAGE.php"><button>Continue Shopping</button></a>
                
            </div>

            <div class="but">
            <a><a href="PURCHASEPAGE.php"><button>Checkout</button></a>
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
            Shopping Cart</h2>
                
                <br><hr>
            </div>
            <div class="Body">
            
            </div>
            <div class="Form">
            <label>Please note that all transactions made are secure and all of your information will remain private.<br><br></label>
</div>
        
        
            
        <table>
            <tr>
                <th></th>
                <th><a>Title:</a></th>
                <th><a>Price:</a></th>
            </tr>
            <tr>
                <td><img src="\VC_Bookstore\Images\book1.jfif" alt="book1"></td>
                <td>Database principles</td>
                <td>R450</td>
            </tr>
            <tr>
                <td><img src="\VC_Bookstore\Images\book2.jfif" alt="book2" ></td>
                <td>Pro C# </td>
                <td>R800</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table><br><br>

        <table>
                <tr>
                    <td>Subtotal:</td>
                    <td>R630</td>
                </tr>
                <tr>
                    <td>Delivery:</td>
                    <td>R80</td>
                </tr>
                <tr>
                    <td><b>Total:</b></td>
                    <td>R710</td>
                </tr>
    
    
        </table>
                 
                 <a><a href="user_home.php"><button style="background-color: #1781C1;
    width: 100px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;
    margin-top: 30px;  
    color: rgb(255, 255, 255);">Continue Shopping</button></a>

<a><a href="PURCHASEPAGE.php"><button style="background-color: #1781C1;
    width: 100px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;
    margin-top: 30px;  
    color: rgb(255, 255, 255);">Checkout</button></a>
                </div>
            </div>
        </div>
    </body>
    
</html>