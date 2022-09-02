<?php

    include("connect.php"); 
    error_reporting(0); 
    session_start(); 

    if(isset($_POST['submit'])) {
        $div_name = $_POST['div_name'];  
        $div_code = $_POST['div_code'];
        
        if (empty($div_name) || empty($div_code)) {
            header("Location: ../index.php?error=emptyfields");
            exit();
        } 
        else {
            $check_id = mysqli_query($db, "SELECT div_name FROM divisions WHERE div_name='".$_POST['div_name']."' ");

        if(!empty($_POST["submit"])) {
            $loginquery = "SELECT * FROM divisions WHERE div_name='$div_name' AND div_code='$div_code'";
            $result = mysqli_query($db, $loginquery); 
            $row = mysqli_fetch_array($result);
        
        if(is_array($row)) {
            $_SESSION["div_name"] = $_POST['div_name']; 
            header("Location: ../corporate-service.php?login=success"); 
            } 
        else {
            $message = "Invalid Division Name or Division Code"; 
            header("Location: ../index.php?loginfailed=wrong_divisionname&code"); 
                }
            }
        }
    }
