<?php  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\css_login.css">
        <style>
            .container {  display: grid;
                grid-template-columns: 0.5fr 2.1fr 0.4fr;
                grid-template-rows: 0.3fr 0.5fr 3fr 0.2fr;
                gap: 0px 0px;
                grid-auto-flow: row;
            }

            .Heading { grid-area: 1 / 1 / 2 / 4; }
            .Body { grid-area: 2 / 1 / 4 / 4; }
            .Footer { grid-area: 4 / 1 / 5 / 4; }
            .Top { grid-area: 2 / 1 / 3 / 4; }
            .login { grid-area: 3 / 2 / 4 / 3; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="Heading">
                <p>Bookstore</p>
            </div>
            <div class="Body"></div>
            <div class="Footer"></div>
            <div class="Top">Login Page</div>
            <div class="login">    
                <form id="login_form" method="get">    
                    <label><b>User Name</b></label>    
                    <input type="text" name="Uname" id="Uname" placeholder="Username">    
                    <br><br>    
                    <label><b>Password</b></label>    
                    <input type="Password" name="Pass" id="Pass" placeholder="Password">    
                    <br><br>    
                    <input type="button" name="log" id="log" value="Login"> 
                    <input type="button" name="sign_up" id="sign_up" value="Sign Up">              
                    <br><br>       
                </form> 
            </div>
        </div>
    </body>
</html>