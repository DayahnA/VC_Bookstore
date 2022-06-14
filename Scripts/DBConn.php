<?php   
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = "bookstore";

  $conn = mysqli_connect($servername, $username, $password, "$dbname");
  if(!$conn){
     die('Could not Connect My Sql:' .mysql_error());
  }

  //https://www.studentstutorial.com/php/php-mysql-data-insert.php - ref
?>