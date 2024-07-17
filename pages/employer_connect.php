<?php
echo "qwdq";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $set = true;
   $post = $_POST['post'];
   $gym_name = $_POST['gymname']; 
   $gym_add = $_POST['gym_add']; 
   $name = $_POST['name'];
   $contact = $_POST['contact'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   

 $conn = new mysqli('localhost', 'root', '', 'details_db' );

   
   $sql = "INSERT INTO employer_details (g_name, g_address, employer_name, employer_post, employer_contact, employer_email, employer_password) VALUES ('$gym_name', '$gym_add', '$name', '$post' , '$contact', '$email','$password' )";
   
   if ($conn->query($sql) === TRUE) {
       echo "<script>alert('Registration Successful')</script>";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
} else {
   echo "<script>alert('Registration Unsuccessful')</script>";
}

    


?>

