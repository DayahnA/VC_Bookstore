<?php
 include("DBConn.php");

 session_start();
  $errorCount = 0;
  $title_error = $author_error = $publisher_error = $ISBN_error = $price_error = $edition_error = $condition_error = "";

  $updateId = $_GET['updateId'];

  $sql = "SELECT * FROM tblBooks WHERE book_Id = $updateId";
    $result = @mysqli_query($conn, $sql);

    if($result === FALSE){
        $_SESSION['message'] = "Error getting the user details - ". mysqli_error($conn);
        $_SESSION['msg_type'] = "danger";
        header('location:admin_bookQuery.php');
        exit();
    } else {
        $row= mysqli_fetch_assoc($result);
            $id = $row['book_ID'];
            $ISBN = $row['ISBN'];
            $title = $row['bookTitle'];
            $author = $row['author'];
            $publisher = $row['publisher'];
            $edition = $row['edition'];
            $price = $row['bookPrice'];
            $condition = $row['bookCondition'];
            $seller = $row['studentID'];
    }

 if(isset($_POST["save"])){
    if(empty($_POST['title'])){
      $title_error = "*Required";
      $errorCount++;
    }else{
      $title = $_POST['title'];
    }

    if(empty($_POST['author'])){
      $author_error = "*Required";
      $errorCount++;
    }else{
      $author = $_POST['author'];
    }

    if(empty($_POST['publisher'])){
        $publisher_error = "*Required";
        $errorCount++;
      }else{
        $publisher = $_POST['publisher'];
      }

    if(empty($_POST['ISBN'])){
      $ISBN_error = "*Required";
      $errorCount++;
    }
    else if(strlen($_POST['ISBN']) != 13){
        $ISBN_error = "Invalid ISBN";
        $errorCount++;
    }
    else{
      $ISBN = $_POST['ISBN'];
    }

    if(empty($_POST['price'])){
      $price_error = "*Required";
      $errorCount++;
    }else{
      $price = $_POST['price'];
    }

    if(empty($_POST['edition'])){
        $edition_error = "*Required";
        $errorCount++;
    }else{
        $edition = $_POST['edition'];
    }

    if(empty($_POST['condition'])){
        $condition_error = "*Required";
        $errorCount++;
    }else{
        $condition = $_POST['condition'];
      }

    if($errorCount == 0){
    //Inserting the data into the book table
    $sql = "UPDATE  tblBooks
            SET ISBN = '$ISBN',
                bookTitle = '$title',
                author = '$author',
                publisher = '$publisher',
                edition = '1',
                bookPrice = '$price',
                bookCondition = '$condition'
            WHERE book_Id = $id;";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "User ". $name ." has been approved.";
        $_SESSION['msg_type'] = "success";
        header('location:admin_userValidation.php'); 
    } else {
        $_SESSION['err_msg'] = "Error: " . mysqli_error($conn);
    }

    $title = $author = $publisher = $ISBN = $price = $edition = $condition = "";

        //closing the connection
        mysqli_close($conn);
        $conn = FALSE;
    }
    unset($_POST["save"]);
 }
?>