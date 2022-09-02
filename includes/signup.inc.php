<?php
    if(isset($_POST['submit'])){
        error_reporting(0);
        session_start(); 
        include("connect.php"); 

        if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password']) || empty($_POST['cpassword'])) {
                header("Location: ../signup.php?emptyfields");
                exit();
        }
        else {
            $check_firstname= mysqli_query($db, "SELECT fname FROM employees WHERE fname='".$_POST['fname']."' ");
            $check_email = mysqli_query($db, "SELECT email FROM employees WHERE email='".$_POST['email']."'");
        }
        if($_POST['password'] != $_POST['cpassword']) { 
            header("Location: ../signup.php?error=confirm_password");
            exit();
        }
        elseif(strlen($_POST['password']) < 8) {
            header("Location: ../signup.php?error=password_must_be_8_characters");
            exit();;
        }
        elseif(strlen($_POST['phone']) < 9) {
            header("Location: ../signup.php?error=phone_must_be_10_digits");
            exit();
        }
        elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            header("Location: ../signup.php?error=invalid_email");
            exit();
        }
        elseif(mysqli_num_rows($check_email) > 0) {
            header("Location: ../signup.php?error=email_already_exists");
            exit();
        }
        else {  
            $mql = "INSERT INTO employees (fname,lname,email,phone,password) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['phone']."','".md5($_POST['password'])."')";
            mysqli_query($db, $mql);

        header("Location: ../login.php?signup=success");
        exit();
            }
        }