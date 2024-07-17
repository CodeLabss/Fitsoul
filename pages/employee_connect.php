<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $set = true; 
   
   $fname = $_POST['fname']; 
   $lname = $_POST['lname']; 
   $gender = $_POST['gender'];
   $profile = $_POST['profile'];
   $number = $_POST['number'];
   $joining = $_POST['joining'];
   $exp = $_POST['exp'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $address = $_POST['address'];
   

 $conn = new mysqli('localhost', 'root', '', 'details_db' );

   
   $sql = "INSERT INTO employee_details (employee_fname,employee_lname,employee_gender, employee_profile, employee_joining , employee_contact  , employee_experience, employee_email, employee_password, employee_address ) 
   VALUES ('$fname', '$lname', '$gender' ,'$profile' ,'$joining',  '$number', '$exp', '$email', '$password', '$address' )";
   
   if ($conn->query($sql) === TRUE) {
       echo "<script>alert('Registration Successful')</script>";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
} else {
   echo "<script>alert('Registration Unsuccessful')</script>";
}

    


?>

