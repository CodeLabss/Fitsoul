<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $set = true; 
   
   $fname = $_POST['fname']; 
   $mname = $_POST['mname']; 
   $lname = $_POST['lname']; 
   $gender = $_POST['gender'];
   $DOB = $_POST['DOB'];
  //  $profile = $_POST['profile'];
  //  $sector = $_POST['sector'];
   $contact1 = $_POST['contact1'];
   $contact2 = $_POST['contact2'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $address1 = $_POST['address1'];
   $address2 = $_POST['address2'];
   $joining = $_POST['joining'];

   $picture = $_FILES['picture']['name'];
   $temp_name_picture = $_FILES['picture']['tmp_name'];
   $folder = 'Images/'. $picture;
   move_uploaded_file($temp_name_picture, $folder);
   

   $CV = $_FILES['CV']['name'];
   $temp_name_CV = $_FILES['CV']['tmp_name'];
   $photo_upload = 'CV/'. $picture;
   move_uploaded_file($temp_name_CV, $photo_upload);

  //  $exp_year = $_POST['exp_year'];
  //  $exp_months = $_POST['exp_months'];
   $intro = $_POST['intro'];
  //  $sector = $_POST['sector']; #by default will be gym but for future if more buisnesses join like zumba,etc.


// password encryption

//   $password = password_hash($password, PASSWORD_BCRYPT);
//   $cpassword = password_hash($cpassword, PASSWORD_BCRYPT);

  $conn = new mysqli('localhost', 'root', '', 'details_db' );


  $sql = "INSERT INTO candidate_details 
    (candidate_fname,candidate_mname,candidate_lname, candidate_DOB , candidate_gender , candidate_joining , candidate_contact, candidate_contact2,   candidate_email, candidate_password, candidate_address1 , candidate_address2 , candidate_picture, candidate_CV  ) 
    VALUES ('$fname', '$mname', '$lname', '$DOB' , '$gender' , '$joining' , '$contact1',  '$contact2' , '$email', '$password', '$address1', '$address2', '$picture', '$CV' )";

if ($conn->query($sql) == TRUE) {
    echo "<script>alert('Registration Successful')</script>";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
echo "<script>alert('Registration Unsuccessful')</script>";
}


// final code p-1  



// $emailquery = "Select * from candidate_details where candidate_email='$email'";
// $query = mysqli_query($conn, $emailquery);

// $emailcount = mysqli_num_rows($query);

// if ($emailcount>0){
//    echo "Email already exists";
// }else{
//    if ($password === $cpassword){
//       if (empty($fname) ||!preg_match("/^[a-zA-Z ]*$/", $fname)) {
//          echo "Invalid first name";
//      } elseif (empty($mname) ||!preg_match("/^[a-zA-Z ]*$/", $mname)) {
//          echo "Invalid middle name";
//      } elseif (empty($lname) ||!preg_match("/^[a-zA-Z ]*$/", $lname)) {
//          echo "Invalid last name";
//      }else{
//       // Password validation
//          if (strlen($password) < 8) {
//          echo "Password must be at least 8 characters";
//          }else{
//                 $sql = "INSERT INTO candidate_details 
//                (candidate_fname,candidate_mname,candidate_lname,candidate_gender, candidate_DOB ,candidate_profile, candidate_joining , candidate_contact, candidate_contact2,   candidate_email, candidate_password, candidate_address1 , candidate_address2 , candidate_picture, candidate_CV  ) 
//                VALUES ('$fname', '$mname', '$lname', '$gender', '$DOB' ,'$profile' ,'$joining',  '$contact1',  '$contact2' , '$email', '$password', '$address1', '$address2', '$picture', '$CV' )";
//                 $result = $conn->query($query);
//                 if ($result) {
//                     echo "Registration successful!";
//                 } else {
//                     echo "Error: ". $conn->error;
//                 }
   
//          }
//      }
 

    

//    }else{
//       echo "Password not matching";
//    }
// }


// final code p-2
// $emailquery = "Select * from candidate_details where candidate_email='$email'";
// $query = mysqli_query($conn, $emailquery);

// $emailcount = mysqli_num_rows($query);

// $errors = array(); // Initialize an empty array to store errors

// if ($emailcount > 0) {
//     $errors[] = "Email already exists";
// } else {
//     if ($password!== $cpassword) {
//         $errors[] = "Password not matching";
//     }

//     if (empty($fname) ||!preg_match("/^[a-zA-Z ]*$/", $fname)) {
//         $errors[] = "Invalid first name";
//     }

//     if (empty($mname) ||!preg_match("/^[a-zA-Z ]*$/", $mname)) {
//         $errors[] = "Invalid middle name";
//     }

//     if (empty($lname) ||!preg_match("/^[a-zA-Z ]*$/", $lname)) {
//         $errors[] = "Invalid last name";
//     }

//     if (strlen($password) < 8) {
//         $errors[] = "Password must be at least 8 characters";
//     }

//     if (count($errors) == 0) {
        // $sql = "INSERT INTO candidate_details 
        //        (candidate_fname,candidate_mname,candidate_lname,candidate_gender, candidate_DOB,candidate_profile, candidate_joining, candidate_contact, candidate_contact2,   candidate_email, candidate_password, candidate_address1, candidate_address2, candidate_picture, candidate_CV  ) 
        //        VALUES ('$fname', '$mname', '$lname', '$gender', '$DOB','$profile','$joining',  '$contact1',  '$contact2', '$email', '$password', '$address1', '$address2', '$picture', '$CV' )";
//         $result = $conn->query($sql);
//         if ($result) {
//             echo "Registration successful!";
//         } else {
//             echo "Error: ". $conn->error;
//         }
//     } else {
//       //   echo "Errors: <br>";
//       //   foreach ($errors as $error) {
//       //       echo "- $error <br>";
//       //   }

//       // Your PHP code here...

//       if (count($errors) > 0) {
//          // Instead of echoing the errors, store them in a session variable
//          $_SESSION['errors'] = $errors;
//          // Redirect back to the form page
//          header('Location: candidate_signup2.php');
//          exit;
//       }
//     }
// }























































//   2nd validation code 
   // Validate name fields
//    if (!preg_match('/^[a-zA-Z ]+$/', $fname)) {
//     $error = 'First name should only contain letters and spaces.';
//     $set = false;
//     $_SESSION['error'] = $error;
//     $_SESSION['post_data'] = $_POST; // store the user's input data in the session
//     header("Location: candidate_signup2.php"); // redirect back to the form page
//     exit;
// } elseif (!preg_match('/^[a-zA-Z ]+$/', $mname)) {
//     $error = 'Middle name should only contain letters and spaces.';
//     $set = false;
//     echo "<script>alert('$error')</script>";
// } elseif (!preg_match('/^[a-zA-Z ]+$/', $lname)) {
//     $error = 'Last name should only contain letters and spaces.';
//     $set = false;
//     echo "<script>alert('$error')</script>";
// }

// if($set == true) {

//   $conn = new mysqli('localhost', 'root', '', 'details_db' );
//     //  if ($password === $cpassword ){
    
//     $sql = "INSERT INTO candidate_details 
//     (candidate_fname,candidate_mname,candidate_lname,candidate_gender, candidate_DOB ,candidate_profile, candidate_joining , candidate_contact, candidate_contact2,   candidate_email, candidate_password, candidate_address1 , candidate_address2 , candidate_picture, candidate_CV  ) 
//     VALUES ('$fname', '$mname', '$lname', '$gender', '$DOB' ,'$profile' ,'$joining',  '$contact1',  '$contact2' , '$email', '$password', '$address1', '$address2', '$picture', '$CV' )";
    
//     if ($conn->query($sql) === TRUE)  {
//       // if ($query_run) {

//         $_SESSION['status'] = "Registration successfull";
//         header("Location:index.html");
//      } 
//    else {
//     echo "Name contains characters";
//     echo "<script>alert('Registration Unsuccessful')</script>";
//  }
//  }
//  else{
//   $_SESSION['status'] = "Confirm Password doesnt match ";
// }

// if(move_uploaded_file($temp_name_picture, $picture) && move_uploaded_file($temp_name_CV, $CV)){

// echo "Both files uploaded successfully";
// }

// }




// 1st validation code

//    if ($password === $cpassword ){
    
//     $sql = "INSERT INTO candidate_details 
//     (candidate_fname,candidate_mname,candidate_lname,candidate_gender, candidate_DOB ,candidate_profile, candidate_joining , candidate_contact, candidate_contact2, candidate_experience_year,  candidate_email, candidate_password, candidate_address1 , candidate_address2 , candidate_picture, candidate_CV  ) 
//     VALUES ('$fname', '$mname', '$lname', '$gender', '$DOB' ,'$profile' ,'$joining',  '$contact1',  '$contact2', '$exp_year' , '$email', '$password', '$address1', '$address2', '$picture', '$CV' )";
    
//     if ($conn->query($sql) === TRUE && (!preg_match('/^[a-zA-Z ]+$/', $fname)) && (!preg_match('/^[a-zA-Z ]+$/', $mname)) && (!preg_match('/^[a-zA-Z ]+$/', $lname))  )  {
//       // if ($query_run) {

//         $_SESSION['status'] = "Registration successfull";
//         header("Location:index.html");
//      } 
//    else {
//     echo "Name contains characters";
//     echo "<script>alert('Registration Unsuccessful')</script>";
//  }
//  }
//  else{
//   $_SESSION['status'] = "Confirm Password doesnt match ";
// }

// if(move_uploaded_file($temp_name_picture, $picture) && move_uploaded_file($temp_name_CV, $CV)){

// echo "Both files uploaded successfully";
// }

//       // Validate name fields
//       if (!preg_match('/^[a-zA-Z ]+$/', $fname)) {
//         $error = 'First name should only contain letters and spaces.';
//         $set = false;
//     } elseif (!preg_match('/^[a-zA-Z ]+$/', $mname)) {
//         $error = 'Middle name should only contain letters and spaces.';
//         $set = false;
//     } elseif (!preg_match('/^[a-zA-Z ]+$/', $lname)) {
//         $error = 'Last name should only contain letters and spaces.';
//         $set = false;
//     }






   


?>


