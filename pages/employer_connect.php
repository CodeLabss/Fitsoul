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

   // $file_name = $_FILES['buisness_photo']['name'];
   // $temp_name_buisness = $_FILES['buisness_photo']['tmp_name'];
   // $folder = 'BImages/'. $file_name;
   // $folder = 'BImages/'. trim($buisness_photo); // trim any extra spaces

   $buisness_photo = $_FILES['buisness_photo']['name'];
   $temp_name_buisness = $_FILES['buisness_photo']['tmp_name'];
   $folder = 'BImages/'. $buisness_photo;
   $photo_upload = 'BImages/';
   move_uploaded_file($temp_name_buisness, $folder);

   // $folder = 'BImages/'. trim($buisness_photo); // trim any extra spaces

   // $folder = 'BImages/'. $buisness_photo;
   // // $buisness_photo = $folder;
   // $photo_upload = 'BImages/';
   // move_uploaded_file($temp_name_buisness, $folder);






//    $buisness_photo = $_FILES['buisness_photo']['name'];
// $temp_name_buisness = $_FILES['buisness_photo']['tmp_name'];

// if ($temp_name_buisness) {
//     $folder = 'BImages' . DIRECTORY_SEPARATOR . basename($buisness_photo);
//     $photo_upload = 'BImages/';
//     if (!file_exists($folder)) {
//         mkdir($folder, 0755, true); // create the folder with correct permissions
//     }
//     if (!file_exists($folder . DIRECTORY_SEPARATOR . $buisness_photo)) {
//         if (move_uploaded_file($temp_name_buisness, $folder)) {
//             echo "File uploaded successfully";
//         } else {
//             echo "Error uploading file";
//         }
//     } else {
//         echo "File already exists";
//     }
// } else {
//     echo "No file uploaded";
// }
   //  $temp_name_buisness = $_FILES['buisness_photo']['temp_name_buisness'];

  // $filename = $_FILES['buisness_photo']['name'];
  // $tempname = $_FILES['buisness_photo']['tmp_name'];
  // $destination = 'BImages/'.$filename;


   $buisness_description = $_POST['buisness_description'];
   

      $conn = new mysqli('localhost', 'root', '', 'details_db' );

   
   $sql = "INSERT INTO employer_details (buisness_name, buisness_address  , buisness_address2 , contact_person_fname, contact_person_mname , contact_person_lname , contact_person_designation, contact_person_phone,  contact_person_phone2 , contact_person_email, contact_person_password,buisness_photo, buisness_description) 
   VALUES ('$buisness_name', '$buisness_add1',  '$buisness_add2' ,'$person_fname', '$person_mname' , '$person_lname','$person_designation' , '$phone1', '$phone2', '$email','$password', '$folder' , '$buisness_description' )";
   
  //  if ($conn->query($sql) === TRUE) {
    // $result = $conn->query($sql);
   //  if (!$conn->error) {
    if(($conn->query($sql) === TRUE) && (move_uploaded_file($temp_name_buisness, $folder)) ){

       echo "<script>alert('Registration Successful')</script>";
   } else {
      //  echo "Error: " . $sql . "<br>" . $conn->error;
      echo "<script>alert('Registration Error')</script>";
      // echo "<script>alert('Registration Error: ". $conn->error. "')</script>";


   }
} 

// image validation 2
// if (isset($_FILES['buisness_photo'])){
//   $path = 'BImages/';
//   $file_name = $_FILES['buisness_photo']['name'];
//   $file_tmp = $_FILES['buisness_photo']['tmp_name'];
//   $file_ext = strtolower(pathinfo(($file_name), [PATHINFO_EXTENSION]));
//   $allowed = ['png', 'jpg', 'jpeg'];
//   $file_size = $_FILES['buisness_photo']['size'];
//   $allowed_size = 2 *1024*1024;

//   if(in_array($file_ext, $allowed)){
//     if($file_size > $allowed_size){
//       echo 'The file is too big';
//     }
//     else{

//       $move_file = move_uploaded_file($file_tmp, $path.$file_name);

//       if($move_file){
//         echo 'File uploaded successfully';
//       }else{
//         echo 'Something wrong';
//       }
//     }

//   }
//   else{
//     echo ' Invalid extension ';
//   }


  
// }





































// print_r($_FILES );


// image validation 2
// function image_validation($image_name, $image_size, $image_temp,$image_type){

//   if(empty($image_name)){
//     return "Please select an image";
//   }

//   if (is_file($image_temp)) {
//     $file_info = new finfo(FILEINFO_MIME_TYPE);
//     $mime_type = $file_info->file($image_temp);

//     $allowed_image_types = ['image/jpeg', 'image/jpeg', 'image/png'];
//     if (in_array($mime_type, $allowed_image_types) == false) {
//         return "Image type invalid";
//     }
// } else {
//     return "Could not find image file";
// }



//   $file_info = new finfo(FILEINFO_MIME_TYPE);
//   $mime_type = $file_info->file($image_temp);

//   $allowed_image_types= ['image/jpeg', 'image/jpeg', 'image/png' ];
//   if(in_array($mime_type, $allowed_image_types) == false){
//     return "Image type invalid";
//   }

//   $upload_max_size = 2 * 1024 * 1024;
//   if($image_size > $upload_max_size){
//     return "Image file too large";
//   } 

// }



// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//   $response = image_validation($_FILES['buisness_photo']['name'],$_FILES['buisness_photo']['size'],$_FILES['buisness_photo']['tmp_name'], $_FILES['buisness_photo']['type'] );
// }

// image validation 1
// if (empty($_FILES)) {
//   exit('$_FILES is empty - is file_uploads set to "Off" in php.ini?');
// }
// if ($_FILES["buisness_photo"]["error"] !== UPLOAD_ERR_OK) {

//   switch ($_FILES["buisness_photo"]["error"]) {
//       case UPLOAD_ERR_PARTIAL:
//           exit('File only partially uploaded');
//           break;
//       case UPLOAD_ERR_NO_FILE:
//           exit('No file was uploaded');
//           break;
//       case UPLOAD_ERR_EXTENSION:
//           exit('File upload stopped by a PHP extension');
//           break;
//       case UPLOAD_ERR_FORM_SIZE:
//           exit('File exceeds MAX_FILE_SIZE in the HTML form');
//           break;
//       case UPLOAD_ERR_INI_SIZE:
//           exit('File exceeds upload_max_filesize in php.ini');
//           break;
//       case UPLOAD_ERR_NO_TMP_DIR:
//           exit('Temporary folder not found');
//           break;
//       case UPLOAD_ERR_CANT_WRITE:
//           exit('Failed to write file');
//           break;
//       default:
//           exit('Unknown upload error');
//           break;
//   }
// }

// Reject uploaded file larger than 1MB
// if ($_FILES["buisness_photo"]["size"] > 1048576) {
//   exit('File too large (max 1MB)');
// }

// Use fileinfo to get the mime type
// $finfo = new finfo(FILEINFO_MIME_TYPE);
// $mime_type = $finfo->file($_FILES["buisness_photo"]["tmp_name"]);

// $mime_types = ["image/gif", "image/png", "image/jpeg"];
      
// if ( ! in_array($mime_type, $mime_types)) {
//   exit("Invalid file type");
// }

// Replace any characters not \w- in the original filename
// $pathinfo = pathinfo($_FILES["buisness_photo"]["name"]);

// $base = $pathinfo["filename"];

// $base = preg_replace("/[^\w-]/", "_", $base);

// $filename = $base . "." . $pathinfo["extension"];

// $destination = __DIR__ . "BImages/" . $filename;

// // Add a numeric suffix if the file already exists
// $i = 1;

// while (file_exists($destination)) {

//   $filename = $base . "($i)." . $pathinfo["extension"];
//   $destination = __DIR__ . "BImages/" . $filename;

//   $i++;
// }

// if ( move_uploaded_file($_FILES["buisness_photo"]["tmp_name"], $destination)) {

// echo "File uploaded successfully.";


// }else{
//   exit("Can't move uploaded file");

// }




// else {
//    echo "<script>alert('Registration Unsuccessful')</script>";
// }

    
// move_uploaded_file($temp_name_buisness, $buisness_photo)

?>


