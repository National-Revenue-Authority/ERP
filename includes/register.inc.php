<?php

    if(isset($_POST['submit'])){ 
        
        include_once "config.php"; 

        $fname     = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname     = mysqli_real_escape_string($conn, $_POST['lname']);
        $email     = mysqli_real_escape_string($conn, $_POST['email']);
        $username  = mysqli_real_escape_string($conn, $_POST['username']);
        $passcode  = mysqli_real_escape_string($conn, $_POST['passcode']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        $division  = mysqli_real_escape_string($conn, $_POST['division']);

        if(empty($fname) || empty($lname) || empty($email) || empty($division) || empty($passcode) || empty($cpassword)) {
            header("Location: ../register.php?q=emptyfields");
            exit();
        }
        else {
            $check_firstname = mysqli_query($conn, "SELECT fname FROM users WHERE fname='$fname'");
            $check_email = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
            $resultCheck = mysqli_num_rows($check_email);
        }
        if($passcode != $cpassword) { 
            header("Location: ../register.php?q=confirm_password");
            exit();
        }
        elseif(strlen($passcode) < 8) {
            header("Location: ../register.php?q=password_must_be_8_characters");
            exit();;
        }
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            header("Location: ../register.php?q=invalid_email");
            exit();
        }
        elseif($resultCheck > 0) {
            header("Location: ../register.php?q=email_already_exists");
            exit();
        }
        else {  
            
            $hashedPass = password_hash($passcode, PASSWORD_DEFAULT);
            

            $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `username`, `passcode`, `division`) VALUES ('$fname', '$lname', '$email', '$username' ,'$hashedPass', '$division')";
            mysqli_query($conn, $sql);

            header("Location: ../login.php?q=success");
            exit();

        }
    } else {
        header("Location: ../register.php");
        exit();
    }