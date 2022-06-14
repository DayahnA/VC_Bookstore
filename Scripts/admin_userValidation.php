<?php  include("DBConn.php")?>
<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <link rel="stylesheet" type="text/css" href="\VC_Bookstore\CSS\admin.css">
        <link rel="stylesheet" type="text/css" href="\VC_Bookstore\CSS\nav_bar.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .container {
                display: grid; 
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
                <p>Bookstore</p>
            </div>
            <div class="Footer"></div>
            <div class="Top-Nav">
                <div class="topnav">
                    <a class="active" href="admin_userValidation.php"><b>User Validation</b></a>
                    <a href="admin_bookQuery.php">Book Queries</a>
                    <a href="studentLogin_form.php">Student Login</a>
                    <a href="adminLogin_form.php">Logout</a>
                </div>
            </div>
            <div class="Top"><br>
                <p>Validate Users</p>
                <br>
            </div>
            <div class="Body"></div>
            <div class="Form">
                <?php
                    session_start();
                    if(isset($_SESSION['message'])){
                        echo '<div class="alert alert-'.$_SESSION["msg_type"].'">'.$_SESSION["message"].'</div>';
                        unset($_SESSION['message']);
                        unset($_SESSION['msg_type']);
                    }
                ?>  

                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead> 

                <?php 
                    $sql = "SELECT * FROM tempUser ORDER BY studentID";
                    $result = mysqli_query($conn, $sql);

                    if($result === FALSE){
                        echo "DB Error - " . mysqli_error();
                        exit();
                    }

                    while($row = mysqli_fetch_assoc($result)){
                        $student_id = $row['studentID'];
                        $name = $row['stuName'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $number = $row['phoneNum'];

                    echo '<tbody>
                        <tr>
                            <th scope="row">'.$student_id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$number.'</td>
                            <td><button type="submit" name="submit" class="btn btn-success"><a href="approveUser.php?approveId='.$student_id.'" class="text-light">Approve</a></button>&nbsp;&nbsp;
                            <button type="submit" name="submit" class="btn btn-danger"><a href="declineUser.php?declinedUser='.$student_id.'" class="text-light">Decline</a></button></td>
                        </tr>
                    </tbody>';
                    }

                    mysqli_close($conn);
                    $result = FALSE;
                    //https://www.w3schools.com/bootstrap/bootstrap_tables.asp - ref
                ?>
                </table>
            </div>
        </div>
    </body>
</html>
