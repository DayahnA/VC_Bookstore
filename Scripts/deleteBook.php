<?php
    include("DBConn.php");

    session_start();
    $id = $_GET['deleteId'];

    //query for indeletingserting into a table
    $delete = "DELETE FROM tblBooks WHERE book_ID = '$id'";

    $execute = mysqli_query($conn, $delete);

    if ($execute === FALSE) {
        $_SESSION['message'] = "The following error occured: ". mysqli_error($conn);
        $_SESSION['msg_type'] = "danger";
        header('location:admin_bookQuery.php');
    } else { 
        $_SESSION['message'] = "Book ". $id." has been successfully deleted.";
        $_SESSION['msg_type'] = "danger";
        header('location:admin_bookQuery.php');

        //closing the connection
        mysqli_close($conn);
        $conn = FALSE;
    }

    unset($_POST["submit"]);
?>