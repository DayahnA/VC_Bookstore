<?php  ?>
<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\css_signUp.css">
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
            <div class="Top">Sign up Page</div>
            <div class="login">    
                <form id="login_form" method="get">    
                    <label><b>ID Number:</b></label>    
                    <input type="text" name="id" id="id" placeholder="Enter ID Number">    
                    <br><br>    
                    <label><b>   Name:</b></label>    
                    <input type="text" name="name" id="name" placeholder="Enter Name">    
                    <br><br>   
                    <label><b>   Email:</b></label>    
                    <input type="text" name="email" id="email" placeholder="Enter Email">    
                    <br><br>    
                    <label><b>Password:</b></label>    
                    <input type="Password" name="Pass" id="Pass" placeholder="Enter Password">    
                    <br><br>     
                    <label><b>Confirm Password:</b></label>    
                    <input type="Password" name="confirmPass" id="confirmPass" placeholder="Re-enter Password">    
                    <br><br> 
                    <label><b>Access:</b></label>  
                    <select name="access" id="access"> 
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                    </select>  
                    <br><br> 
                    <label><b>Phone number:</b></label>   
                    <input type="text" name="phoneNum" id="phoneNum" placeholder="Enter Phone number">    
                    <br><br> 
                    <input type="button" name="back" id="back" value="Back"> 
                    <input type="button" name="save" id="save" value="Save">              
                    <br><br>       
                </form> 
            </div>
        </div>
    </body>
</html>