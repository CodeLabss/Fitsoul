
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $set = true;

  //  $post = $_POST['post'];
   $buisness_name = $_POST['buisness_name']; 
   $buisness_add1 = $_POST['buisness_add1']; 
   $buisness_add2 = $_POST['buisness_add2']; 
  //  $buisness_state = $_POST['buisness_state'];
  //  $buisness_district = $_POST['buisness_district'];
  //  $buisness_pincode = $_POST['buisness_pincode'];
   $person_fname = $_POST['person_fname'];
   $person_mname = $_POST['person_mname'];
   $person_lname = $_POST['person_lname'];
   $person_designation = $_POST['person_designation'];
   $phone1 = $_POST['phone1'];
   $phone2 = $_POST['phone2'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $buisness_photo = $_FILES['buisness_photo']['name'];
  //  $temp_name_buisness = $_FILES['buisness_photo']['temp_name_buisness'];
  //  $folder = 'BImages/'. $buisness_photo;


   $buisness_description = $_POST['buisness_description'];
   

 $conn = new mysqli('localhost', 'root', '', 'details_db' );

   
   $sql = "INSERT INTO employer_details (buisness_name, buisness_address  , buisness_address2 , contact_person_fname, contact_person_mname , contact_person_lname , contact_person_designation, contact_person_phone,  contact_person_phone2 , contact_person_email, contact_person_password, buisness_photo, buisness_description) 
   VALUES ('$buisness_name', '$buisness_add1',  '$buisness_add2' ,'$person_fname', '$person_mname' , '$person_lname','$person_designation' , '$phone1', '$phone2', '$email','$password', '$buisness_photo', '$buisness_description' )";
   
   if ($conn->query($sql) === TRUE) {
       echo "<script>alert('Registration Successful')</script>";
   } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
} else {
   echo "<script>alert('Registration Unsuccessful')</script>";
}

    
// move_uploaded_file($temp_name_buisness, $buisness_photo)

?>


