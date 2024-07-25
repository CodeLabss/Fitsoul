<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "Email: $email<br>"; // Add this line
        echo "Password: $password<br>"; // Add this line

        $conn = new mysqli('localhost', 'root', '', 'details_db' );

        if($conn->connect_error){
            die("Connection failed :". $conn->connect_err);
        }

        $sql = "SELECT *from employer_details  where  contact_person_email='$email' AND  contact_person_email  ='$password'  ";
        // echo "Query: $query<br>";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['contact_person_email'] === $email && $row['contact_person_password' ] === $password ){
                echo "Logged in!";
                header("Location:index.html");
                exit();
            }
            else{
                header("Location: employer_signup2.php?error=Incorrect username or password");
                exit();
            }
        }
        else{
            // echo "Error";
            header("Location: index.html");
            exit();
        }


        // if($result){
        //     echo "Result: " . $result->num_rows . "<br>";
        //     if($result->num_rows == 1){
        //         // success
        //         echo "Login successful!<br>";
        //         header("Location: index.html");
        //         exit();
        //     }
        //     else{
        //         header("Location: employer_signup2.html");

        //         exit();
        //     }
        // }
        // else{
        //     echo "Error: " . $conn->error . "<br>";
        // }
    

        $conn->close();
    }
?>