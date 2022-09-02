<?php
    include("connect.php"); 
    error_reporting(0); 
    session_start(); 

    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $email = $_POST['email'];  
        $password = $_POST['password'];
        
        if (empty($email) || empty($password)) {
            header("Location: ../login.php?error=emptyfields");
            exit();
        }
        else {
            $check_firstname= mysqli_query($db, "SELECT fname FROM employees WHERE fname='".$_POST['fname']."' ");
            $check_email = mysqli_query($db, "SELECT email FROM employees WHERE email='".$_POST['email']."' ");

        if(!empty($_POST["submit"])) {
            $loginquery ="SELECT * FROM employees WHERE fname='fname' OR email='$email' && password='".md5($password)."'";
            $result=mysqli_query($db, $loginquery); 
            $row=mysqli_fetch_array($result);
        
        if(is_array($row)) {
            $_SESSION["user_id"] = $row['adm_id'];
            $_SESSION["fname"] = $row['fname'];
            $_SESSION["email"] = $_POST['email']; 
            header("Location: ../divisions.php?login=success"); 
            } 
        else {
            $message = "Invalid Email or Password"; 
            header("Location: ../login.php?loginfailed=wrongemail&password"); 
                }
            }
        }
    }
