<?php
 include("DBConn.php");

 session_start();
  $errorCount = 0;
  $id = $name = $email = $password = $confirmPass = $phoneNum = "";
  $id_error = $name_error = $email_error = $password_error = $confirmPass_error = $phoneNum_error = "";

 if(isset($_POST["save"])){
    //validating and assigning student ID
    if(empty($_POST['id'])){
      $id_error = "*Required";
      $errorCount++;
    }else{
      $id = $_POST['id'];
    }

    //validating and assigning student name
    if(empty($_POST['name'])){
      $name_error = "*Required";
      $errorCount++;
    }else{
      $name = $_POST['name'];
    }

     //validating and assigning email
    if(empty($_POST['email'])){
      $email_error = "*Required";
      $errorCount++;
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $email_error = "Invalid Email";
        $errorCount++;
    }
    else{
      $email = $_POST['email'];
    }

    //validating and assigning password 
    if(empty($_POST['Pass'])){
      $password_error = "*Required";
      $errorCount++;
    }
    else {
      $password = $_POST['Pass'];
      $number = preg_match('@[0-9]@', $password);
      $uppercase = preg_match('@[A-Z]@', $password);
      $lowercase = preg_match('@[a-z]@', $password);
      //https://www.cluemediator.com/how-to-validate-password-strength-in-php - ref

      if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase) {
        $password_error = "Invalid password";
        $_SESSION['err_msg'] = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter and one lower case letter.";
        $errorCount++;
      }
      else{
        //encrypting password
        $ciphering = "AES-128-CTR";
  
        // Use OpenSSl Encryption method
        $iv_length = openssl_cipher_iv_length($ciphering);
        $options = 0;
  
        // Non-NULL Initialization Vector for encryption
        $encryption_iv = '1234567891011121';
  
        // Store the encryption key
        $encryption_key = "GeeksforGeeks";
  
        // Use openssl_encrypt() function to encrypt the data
        $encryptedPass = openssl_encrypt($password, $ciphering, $encryption_key, $options, $encryption_iv);
  
        //https://www.geeksforgeeks.org/how-to-encrypt-and-decrypt-a-php-string/#:~:text=In%20PHP%2C%20Encryption%20and%20Decryption,used%20to%20encrypt%20the%20data.&text=Parameters%3A,which%20need%20to%20be%20encrypted. - ref
      }
    }

     //validating if passwords match
    if(empty($_POST['confirmPass'])){
      $confirmPass_error = "*Required";
      $errorCount++;
    } 
    else if($_POST['confirmPass']!== $password){
        $confirmPass_error = "Passwords don't match";
        $errorCount++;
    }

     //validating and assigning phone number
    if(empty($_POST['phoneNum'])){
      $phoneNum_error = "*Required";
      $errorCount++;
    } else if(strlen($_POST['phoneNum']) !== 10 ){
      $phoneNum_error = "Invalid number";
      $errorCount++;
    } else{
      $phoneNum = $_POST['phoneNum'];
    }

    if($errorCount == 0){
    //Inserting the data into the user table
    $sql = "INSERT INTO tblUser (studentID, stuName, email, password, phoneNum)
            VALUES ('$id', '$name', '$email', '$encryptedPass', '$phoneNum')";
    
    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Details saved successfully.";
       // header("Location:studentSignUp_form.php");
    } else {
        $_SESSION['err_msg'] = "Error: " . mysqli_error($conn);
    }

      $id = $name = $email = $password = $confirmPass = $phoneNum = "";

        //closing the connection
        mysqli_close($conn);
        $conn = FALSE;
    }
    unset($_POST["save"]);
 }
?>