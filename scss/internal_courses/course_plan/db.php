<?php

define('DB_SERVER', 'localhost');

define('DB_USERNAME', 'courses_redefedu');

define('DB_PASSWORD', 'courses@123');

define('DB_DATABASE', 'courses_redefedu');



$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);



// Check connection

if($conn === false)

{

   die("ERROR: Could not connect. " . mysqli_connect_error());

}

else{

  //  echo "<script>alert('Database connected successfully')</script>";

   // echo "Database connected successfully";

}

?>



