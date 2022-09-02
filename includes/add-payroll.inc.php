<?php
    if(isset($_POST['submit'])){
        error_reporting(0);
        session_start(); 
        include("connect.php"); 

        if(empty($_POST['emp_id']) || empty($_POST['emp_name']) || empty($_POST['title']) || empty($_POST['department']) || empty($_POST['grade']) || empty($_POST['gross_salary']) || empty($_POST['net_salary']) || empty($_POST['account_no']) || empty($_POST['bank']) || empty($_POST['joined']) || empty($_POST['deductions'])) {
                header("Location: ../csd-payroll.php?emptyfields");
                exit();
        }
        else {
            $check_firstname= mysqli_query($db, "SELECT emp_name FROM csd_payroll WHERE emp_name='".$_POST['emp_name']."' ");
            $check_email = mysqli_query($db, "SELECT emp_id FROM csd_payroll WHERE emp_id='".$_POST['emp_id']."'");
        }
                    $mql = "INSERT INTO csd_payroll (emp_id,emp_name,title,department,grade,gross_salary,net_salary,account_no,bank,joined,deductions) VALUES ('".$_POST['emp_id']."','".$_POST['emp_name']."','".$_POST['title']."','".$_POST['department']."','".$_POST['grade']."','".$_POST['gross_salary']."','".$_POST['net_salary']."','".$_POST['account_no']."','".$_POST['bank']."'),'".$_POST['joined']."','".$_POST['deductions']."')";
            mysqli_query($db, $mql);

        header("Location: ../csd-payroll.php?employeeadded=success");
        exit();
            }