<?php 
  $conn = new mysqli('localhost', 'root', '', 'details_db' );
//   echo "Host: " . $host . "<br>";
// echo "User: " . $user . "<br>";
// echo "Password: " . $password . "<br>";

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

?>