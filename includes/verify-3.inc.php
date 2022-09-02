<?php
    include("connect.php"); 
    error_reporting(0); 
    session_start(); 

    if(isset($_POST['submit'])) {
        $dept_id = $_POST['dept_id'];  
        $password = $_POST['password'];
        
        if (empty($dept_id) || empty($password)) {
            header("Location: ../departments.php?error=emptyfields");
            exit();
        }
        else {
            $check_id = mysqli_query($db, "SELECT dept_id FROM dept_codes WHERE dept_id='".$_POST['dept_id']."' ");

        if(!empty($_POST["submit"])) {
            $loginquery ="SELECT * FROM dept_codes WHERE dept_id='$dept_id' AND password='$password'";
            $result=mysqli_query($db, $loginquery); 
            $row=mysqli_fetch_array($result);
        
        if(is_array($row)) {
            $_SESSION["dept_id"] = $_POST['dept_id']; 
            header("Location: ../excel-3.php?login=success"); 
            } 
        else {
            $message = "Invalid Email or Password"; 
            header("Location: ../departments.php?loginfailed=wrongemail&password"); 
                }
            }
        }
    }
