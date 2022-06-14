<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\ADDLISTINGCSS.css">
        <link rel="stylesheet" type="text/css" href="\VC_Bookstore\CSS\nav_bar.css">
        <style>
            .container {  display: grid;
  grid-template-columns: 0.7fr 1fr 1.7fr 1fr 0.6fr;
  grid-template-rows: 0.6fr 0.5fr 2.4fr 0.5fr;
  gap: 0px 0px;
  grid-auto-flow: row;
}

.nav { grid-area: 1 / 1 / 2 / 2; }

.logo { grid-area: 1 / 2 / 2 / 3; }

.bookst { grid-area: 1 / 3 / 2 / 4; }

.help { grid-area: 1 / 4 / 2 / 5; }

.cart { grid-area: 1 / 5 / 2 / 6; }

.top { grid-area: 2 / 2 / 3 / 5; }

.body { grid-area: 3 / 2 / 4 / 5; }

.footer { grid-area: 4 / 2 / 5 / 5; }

        </style>
    </head>
    <body>
    <!--

    <div class="container">
  <div class="nav"></div>
  <div class="cart"><img src="img/shopcart.png" width="75" height="75"></div>
  <div class="help">Customer helpline: 012 345 678 &emsp;</div>
  <div class="logo"><img src="img/Varsity.png" width="125" height="75"></div>
  <div class="bookst">Book Store &emsp;</div>
  <div class="top"><img src="img/arrow-25858_960_720.png" width="100" height="100">Add New Listing</div>
  <div class="body"><form method="post">
        <label><b>Book Title:</b></label> 
        <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Author:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Publisher:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>ISBN Number:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Edition:</b></label> 
                 <select name="Edition">
                            <option value="first">first</option>
                            <option value="second">second</option>
                            <option value="third">third</option>
                            <option value="fourth">fourth</option>
                            <option value="fifth">fifth</option>
                            <option value="sixth">sixth</option>
                            <option value="seventh">seventh</option>
                        </select><Br><Br>
                        <label><b>Add Image:</b></label><br><br>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/><Br><Br>
                        <label><b>Price:</b></label> 
                        <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 
                 <label><b>Select The Condition:</b></label> <Br><Br>

                
                        
                        
                 <input type="radio" class="radio" id="acceptable" name="acceptable"/>
                 <label for="acceptable">Acceptable</label><br><br>  


                
                <input type="radio" class="radio" id="average" name="average"/>
                <label for="average">Average</label><br><br>  



                
                <input type="radio" class="radio" id="excellent" name="excellent"/>
                <label for="excellent">Excellent</label><br><br>  


            </form></div>
  <div class="footer"><a href="BANKINGPAGE.php"><button>Next</button></div>
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
            <img src="img/arrow-25858_960_720.png" width="100" height="100">Add New Listing
                <br><hr>
            </div>
            <div class="Body">
                <p><b>Textbook Listings:</b></p>
            </div>
            <div class="Form">
            <form method="post">
        <label><b>Book Title:</b></label> 
        <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Author:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Publisher:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>ISBN Number:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Edition:</b></label> 
                 <select name="Edition">
                            <option value="first">first</option>
                            <option value="second">second</option>
                            <option value="third">third</option>
                            <option value="fourth">fourth</option>
                            <option value="fifth">fifth</option>
                            <option value="sixth">sixth</option>
                            <option value="seventh">seventh</option>
                        </select><Br><Br>
                        <label><b>Add Image:</b></label><br><br>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/><Br><Br>
                        <label><b>Price:</b></label> 
                        <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 
                 <label><b>Select The Condition:</b></label> <Br><Br>

                
                        
                        
                 <input type="radio" class="radio" id="acceptable" name="acceptable"/>
                 <label for="acceptable">Acceptable</label><br><br>  


                
                <input type="radio" class="radio" id="average" name="average"/>
                <label for="average">Average</label><br><br>  



                
                <input type="radio" class="radio" id="excellent" name="excellent"/>
                <label for="excellent">Excellent</label><br><br>  


            </form>
            </div>
        </div>
    </body>
</html>
