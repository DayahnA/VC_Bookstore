<?php include("process_adminSignUp.php") ?>
<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <link rel="stylesheet" type="text/css" href="\VC_Bookstore\CSS\signUp.css">
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
            <div class="Top">
                <p>Admin - Sign up Page</p>
                <label id="msg" style="color: green"><b><?php print ( isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ); ?></b></label>
                <label id="msg" style="color: red"><b><?php print ( isset($_SESSION['err_msg']) ? $_SESSION['err_msg'] : '' ); ?></b></label>
            </div>
            <div class="login">    
                <form id="login_form" action="" method="POST">  
                    <label><b>  Admin ID:</b></label>    
                    <input type="text" name="id" id="id" value="<?=$id?>" placeholder="Enter ID Number"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$id_error?></span> 
                    <br><br>    
                    <label><b>  Name:</b></label>    
                    <input type="text" name="name" id="name" value="<?=$name?>" placeholder="Enter Name"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$name_error?></span>    
                    <br><br>   
                    <label><b>  Email:</b></label>    
                    <input type="text" name="email" id="email" value="<?=$email?>" placeholder="Enter Email"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$email_error?></span>     
                    <br><br>    
                    <label><b>Password:</b></label>    
                    <input type="Password" name="Pass" id="Pass" value="<?=$password?>" placeholder="Enter Password"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$password_error?></span>     
                    <br><br>     
                    <label><b>Confirm Password:</b></label>    
                    <input type="Password" name="confirmPass" id="confirmPass" value="<?=$confirmPass?>" placeholder="Re-enter Password"><span style="color:red; font-family: Arial, Helvetica, sans-serif;"><?=$confirmPass_error?></span>        
                    <br><br> 
                    <input type="button" name="back" id="back" value="Back" onclick="window.location.href='adminLogin_form.php'">
                    <button type="submit" name="save" id="save">Save</button>             
                </form> 
                <?php unset($_SESSION['msg']);?>
                <?php unset($_SESSION['err_msg']);?>
            </div>
        </div>
    </body>
</html>