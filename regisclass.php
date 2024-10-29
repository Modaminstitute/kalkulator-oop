<?php
//tanpa sql
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $password = $_POST['password'];

  
    $encrypted_password = base64_encode($password);

    // Save data ke users.txt
    $user_data = $fname . "," . $lname . "," . $nim . "," . $email . "," . $encrypted_password . "\n";
    file_put_contents("users.txt", $user_data, FILE_APPEND);

    // Redirect 
    header("Location: login_pert4.php");
}
?>