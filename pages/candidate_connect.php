<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $set = true; 
   
   $fname = $_POST['fname']; 
   $mname = $_POST['mname']; 
   $lname = $_POST['lname']; 
   $gender = $_POST['gender'];
   $DOB = $_POST['DOB'];
   $profile = $_POST['profile'];
   $joining = $_POST['joining'];
   $contact1 = $_POST['contact1'];
   $contact2 = $_POST['contact2'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $address1 = $_POST['address1'];
   $address2 = $_POST['address2'];


   $picture = $_FILES['picture']['name'];
   $temp_name = $_FILES['picture']['tmp_name'];
   $folder = 'Images/'. $picture;
  //  if(move_uploaded_file($temp_name, $folder));


   $CV = $_FILES['CV']['name'];
   $tp_name = $_FILES['CV']['tp_name'];
   $folder = 'CV/'. $CV;
   
   $exp_year = $_POST['exp_year'];
   $exp_months = $_POST['exp_months'];
   $intro = $_POST['into'];
   $secotor = $_POST['sector']; #by default will be gym but for future if more buisnesses join like zumba,etc.

   

 $conn = new mysqli('localhost', 'root', '', 'details_db' );

   
   $sql = "INSERT INTO candidate_details (candidate_fname,candidate_mname,candidate_lname,candidate_gender, candidate_DOB , candidate_profile, candidate_joining , candidate_contact, candidate_contact2, candidate_experience_year, candidate_experience_months, candidate_email, candidate_password, candidate_address1 , candidate_address2  , candidate_CV, candidate_picture, candidate_inroduction, candidate_sector ) 
   VALUES ('$fname', '$mname', '$lname', '$gender', '$DOB' ,'$profile' ,'$joining',  '$contact1',  '$contact2', '$exp_year', '$exp_months' , '$email', '$password', '$address1', '$address2', '$CV', '$picture' )";
   
   if ($conn->query($sql) === TRUE) {
     header("Location:gym-jobportal.html");
     echo "<script> alert('Registration Successful') </script>";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
} else {
   echo "<script>alert('Registration Unsuccessful')</script>";
}

    


?>


