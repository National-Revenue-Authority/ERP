<?php
    if(isset($_POST['submit'])){
        error_reporting(0);
        session_start(); 
        include("connect.php"); 

        if(empty($_POST['dept_name']) || empty($_POST['dept_id']) || empty($_POST['hod_title']) || empty($_POST['no_staff'])) {
                header("Location: ../csd-departments.php?emptyfields");
                exit();
        }
        else {
            $check_firstname= mysqli_query($db, "SELECT dept_name FROM csd_departments WHERE fname='".$_POST['fname']."' ");
            $check_email = mysqli_query($db, "SELECT dept_id FROM csd_departments WHERE dept_id='".$_POST['email']."'");
        }
            $mql = "INSERT INTO csd_departments (dept_name,dept_id,hod_title,no_staff) VALUES ('".$_POST['dept_name']."','".$_POST['dept_id']."','".$_POST['hod_title']."','".$_POST['no_staff']."')";
            mysqli_query($db, $mql);

        header("Location: ../csd-departments.php?departmentadded=success");
        exit();
            }