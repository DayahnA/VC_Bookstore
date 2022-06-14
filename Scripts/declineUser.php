<?php
    include("DBConn.php");

    session_start();
    $student_Id = $_GET['declinedUser'];

    //query for indeletingserting into a table
    $delete = "DELETE FROM tempUser WHERE studentID = '$student_Id'";

    $execute = mysqli_query($conn, $delete);

    if ($execute === FALSE) {
        $_SESSION['message'] = "The following error occured: ". mysqli_error($conn);
        $_SESSION['msg_type'] = "danger";
        header('location:admin_userValidation.php');
    } else { 
        $_SESSION['message'] = "User ". $student_Id." has been declined.";
        $_SESSION['msg_type'] = "primary";
        header('location:admin_userValidation.php');

        //closing the connection
        mysqli_close($conn);
        $conn = FALSE;
    }

    unset($_POST["submit"]);
?>