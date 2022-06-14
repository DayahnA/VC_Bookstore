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
            <div class="Top-Nav">
                <div class="topnav">
                    <a href="admin_userValidation.php"><b>User Validation</b></a>
                    <a class="active" href="admin_bookQuery.php">Book Queries</a>
                    <a href="studentLogin_form.php">Student Login</a>
                    <a href="adminLogin_form.php">Logout</a>
                </div>
            </div>
            <div class="Top"><br>
                <p>Query Books</p>
            </div>
            <div class="Body"></div>
            <div class="Form">
            <button type="submit" name="submit" class="btn btn-success"><a href="update_form.php" class="text-light">Add new book</a></button>
                <?php
                    session_start();
                    if(isset($_SESSION['message'])){
                        echo '<div class="alert alert-'.$_SESSION["msg_type"].'">'.$_SESSION["message"].'</div>';
                        unset($_SESSION['message']);
                        unset($_SESSION['msg_type']);
                    }
                ?>  
                <br>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Book ID</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Book Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Edition</th>
                    <th scope="col">Price</th>
                    <th scope="col">Condition</th>
                    <th scope="col">Seller</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead> 

                <?php 
                    $sql = "SELECT * FROM tblBooks ORDER BY ISBN";
                    $result = mysqli_query($conn, $sql);

                    if($result === FALSE){
                        echo "DB Error - " . mysqli_error();
                        exit();
                    }

                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['book_ID'];
                        $isbn = $row['ISBN'];
                        $title = $row['bookTitle'];
                        $author = $row['author'];
                        $publisher = $row['publisher'];
                        $edition = $row['edition'];
                        $price = $row['bookPrice'];
                        $condition = $row['bookCondition'];
                        $seller = $row['studentID'];

                    echo '<tbody>
                        <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$isbn.'</td>
                            <td>'.$title.'</td>
                            <td>'.$author.'</td>
                            <td>'.$publisher.'</td>
                            <td>'.$edition.'</td>
                            <td> R '.$price.'</td>
                            <td>'.$condition.'</td>
                            <td>'.$seller.'</td>
                            <td><button type="submit" name="submit" class="btn btn-primary"><a href="update_form.php?updateId='.$id.'" class="text-light">Update</a></button>&nbsp;&nbsp;
                            <button type="submit" name="submit" class="btn btn-danger"><a href="deleteBook.php?deleteId='.$id.'" class="text-light">Delete</a></button></td>
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
