<?php
    include("dbconn.php");

    session_start();
    $studentID = $_GET['approveId'];

    //fetching user data using student ID
    $fetch = "SELECT * FROM tempUser WHERE studentID = '$studentID'";
    $result = mysqli_query($conn, $fetch);

    if($result === FALSE){
        $_SESSION['message'] = "DB Error - " . mysqli_error();
        $_SESSION['msg_type'] = "danger";
        header('location:admin_userValidation.php');  
        exit();
    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['studentID'];
        $name = $row['stuName'];
        $email = $row['email'];
        $password = $row['password'];
        $number = $row['phoneNum'];

        //query for inserting into tblUser table
        $insert = "INSERT INTO tblUser (studentID, stuName, email, password, phoneNum) values('".$id."','".$name."','".$email."','".$password."','".$number."')";
        $dbResult = mysqli_query($conn, $insert);

        if ($dbResult === FALSE) {
            $_SESSION['message'] =  "Error inserting into database: ". mysqli_error($conn);
            $_SESSION['msg_type'] = "danger";
            header('location:admin_userValidation.php');  
        }
        else { 
            $_SESSION['message'] = "User ". $name ." has been approved.";
            $_SESSION['msg_type'] = "success";
            header('location:admin_userValidation.php'); 
            
            //removing user from tempUser
            $delete = "DELETE FROM tempUser WHERE studentID = '$id'";
            $execute = mysqli_query($conn, $delete);
        }
        //closing the connection
        mysqli_close($conn);
        $conn = FALSE;
    }
    unset($_POST["submit"]);

?>