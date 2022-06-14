<?php  include("process_adminLogin.php")?>
<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <link rel="stylesheet" type="text/css" href="\VC_Bookstore\CSS\login.css">
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
            <div class="Top">
                <p>Login Page - Admin</p>
                <label id="msg" style="color: red"><b><?php print ( isset($_SESSION['err_msg']) ? $_SESSION['err_msg'] : '' ); ?></b></label>
            </div>
            <div class="login">    
                <form id="login_form" action="" method="POST">     
                    <label><b>Username:</b></label>    
                    <input type="text" name="Uname" id="Uname" placeholder="Username"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$uName_error?></span>  
                    <br><br>    
                    <label><b>Password:</b></label>    
                    <input type="Password" name="Pass" id="Pass" placeholder="Password"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$pass_error?></span>   
                    <br><br>    
                    <button type="submit" name="admin_log" id="admin_log">Login</button>
                    <input type="button" name="admin_signUp" id="admin_signUp" value="Sign Up" onclick="window.location.href='adminSignUp_form.php'">          
                </form> 
                <?php unset($_SESSION['err_msg']);?>
            </div>
        </div>
    </body>
</html>