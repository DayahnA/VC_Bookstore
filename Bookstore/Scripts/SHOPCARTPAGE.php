<!DOCTYPE html>
<html>
    <head>
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
    </body>
</html>