<?php
 include("DBConn.php");

  session_start();
  $email = $password = "";
  $uName_error = $pass_error = "";
  $errorCount = 0;
  
 if(isset($_POST["admin_log"])){

     //validating and assigning email
    if(empty($_POST['Uname'])){
        $uName_error = "   **";
        $_SESSION['err_msg'] = "*Please fill in the required fields.";
        $errorCount++;
    } else{
      $email = $_POST['Uname'];
    }

    //validating and assigning password 
    if(empty($_POST['Pass'])){
        $pass_error = "   **";
        $_SESSION['err_msg'] = "*Please fill in the required fields.";
        $errorCount++;
    }
    else {
      $password = $_POST['Pass'];
    }

    if($errorCount == 0){
    //comparing variables to data in the user table
    $query = "SELECT password FROM tblUser WHERE email = '$email'";

    $sql = mysqli_query($conn, $query);

    if (mysqli_num_rows($sql) == 1) {

        while ($row = mysqli_fetch_assoc($sql)) {
          $pswd =  $row["password"]; 

          //Decrypting password
          $ciphering = "AES-128-CTR";
          $iv_length = openssl_cipher_iv_length($ciphering);
          $options = 0;
          
          // Non-NULL Initialization Vector for decryption
          $decryption_iv = '1234567891011121';
  
          // Store the decryption key
          $decryption_key = "GeeksforGeeks";
  
          // Use openssl_decrypt() function to decrypt the data
          $decryptedPass = openssl_decrypt ($pswd, $ciphering, $decryption_key, $options, $decryption_iv);
          //https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/#:~:text=In%20PHP%2C%20Encryption%20and%20Decryption,used%20to%20encrypt%20the%20data.&text=Parameters%3A,which%20need%20to%20be%20encrypted. - ref

          if($password == $decryptedPass){
            $_SESSION['message'] = "User Logged in";
            $_SESSION['msg_type'] = "success";
            header('Location: admin_userValidation.php');
            exit;
          }
          else {
            $_SESSION['err_msg'] = "Incorrect Credentials! Try again!";
          }
        }
      
    } else {
      $_SESSION['err_msg'] = "Incorrect Credentials! Try again!";
    }

      $id = $email = $password = "";

        //closing the connection
        mysqli_close($conn);
        $conn = FALSE;
    }
    
    unset($_POST["admin_log"]);
 }
?>