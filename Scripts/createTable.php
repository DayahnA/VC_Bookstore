<?php 
   (include "DBConn.php");

   $drop_query = 'DROP TABLE IF EXISTS `bookstore`.`tbluser`';
   $create_query = 'CREATE TABLE `bookstore`.`tblUser` ( 
                    `studentID` VARCHAR(15) NOT NULL PRIMARY KEY,
                    `stuName` VARCHAR(50) NOT NULL, 
                    `email`VARCHAR(50) NOT NULL,
                    `password` VARCHAR(50) NOT NULL, 
                    `phoneNum` VARCHAR(10) NOT NULL)';

    $txt_file = 'C:\wamp64\www\VC_Bookstore\userData.txt';

    mysqli_query($conn, $drop_query); // drop the table if it exists
    mysqli_query($conn, $create_query); //create the table
    
    echo "tblUser successfully created!";
    echo "<br>";
    
    //https://findnerd.com/list/view/Create-and-Delete-and-Recreate-Table/18026/ - ref

    if(!file_exists($txt_file)) {
        die("File not found. Make sure you specified the correct path.");
    }else {
        $open = fopen($txt_file,'r');
 
        while (!feof($open)) {
	        $getTextLine = fgets($open);
	        $explodeLine = explode(",",$getTextLine);
	
	        list($id, $name, $email, $password, $phoneNum) = $explodeLine;
	
	        $qry = "INSERT INTO tblUser (studentID, stuName, email, password, phoneNum) values('".$id."','".$name."','".$email."','".$password."','".$phoneNum."')";
	        mysqli_query($conn,$qry);

        }
        echo "5 row(s) inserted";
    }
    //https://www.wdb24.com/php-read-text-file-and-insert-into-mysql-database/ - ref


   /*$sql = "INSERT INTO tbluser (studentID, stuName, email, password, phoneNum)
            VALUES ('ST1090', 'jack', 'jack@vc.xa', '12345', 0876)";
    
    if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }*/
	 mysqli_close($conn);
?>