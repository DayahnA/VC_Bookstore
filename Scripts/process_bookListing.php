<?php
 include("DBConn.php");

 session_start();
  $errorCount = 0;
  $title = $author = $publisher = $ISBN = $price = $edition = $condition = "";
  $title_error = $author_error = $publisher_error = $ISBN_error = $price_error = $edition_error = $condition_error = "";

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
    $sql = "INSERT INTO tblBooks (book_ID, ISBN, bookTitle, author, publisher, edition, bookPrice, bookCondition, studentID) 
            VALUES (NULL, '$ISBN', '$title', '$author', '$publisher', '1', '$price', '$condition', 'ST001')";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Book details saved successfully.";
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