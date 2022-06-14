<!DOCTYPE html>
<html>
    <head>
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
    </body>
</html>