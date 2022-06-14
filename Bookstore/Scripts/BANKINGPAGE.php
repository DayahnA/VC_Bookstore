<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\BANKINGPAGECSS.css">
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
            <label>Please make sure that your banking information is correct as it is neccessary for seller
                 to make payments to this account. All information will remain private.</label><Br><Br>

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
     
                    

                    
                <a><a href="BOOKINFOPAGE.php"><button>Done</button></a>
            </div>
            
            <div class="top">
            <img src="img/arrow-25858_960_720.png" width="100" height="100">  
            Banking details</div>

            <div class="lock">
            <img src="img/lock.png" width="75" height="75"><Br>
                    Your information is safe with us!</div>
            
            
        </div>
    </body>
</html>