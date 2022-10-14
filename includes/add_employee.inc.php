<?php

    include_once "config.php";

    if (isset($_POST['submit_employee'])) {
        
        $surname        = mysqli_real_escape_string($conn, $_POST['surname']);
        $fname          = mysqli_real_escape_string($conn, $_POST['fname']);
        $othernames     = mysqli_real_escape_string($conn, $_POST['othernames']);
        $gender         = mysqli_real_escape_string($conn, $_POST['gender']);
        $dob            = mysqli_real_escape_string($conn, $_POST['dob']);
        $marital_status = mysqli_real_escape_string($conn, $_POST['marital_status']);
        $postal_address = mysqli_real_escape_string($conn, $_POST['postal_address']);
        $phone          = mysqli_real_escape_string($conn, $_POST['phone']);
        $email          = mysqli_real_escape_string($conn, $_POST['email']);
        $state          = mysqli_real_escape_string($conn, $_POST['state']);
        $poo            = mysqli_real_escape_string($conn, $_POST['poo']);
        $payroll_no     = mysqli_real_escape_string($conn, $_POST['payroll_no']);
        $kin_fullname   = mysqli_real_escape_string($conn, $_POST['kin_fullname']);
        $kin_address    = mysqli_real_escape_string($conn, $_POST['kin_address']);
        $kin_phone      = mysqli_real_escape_string($conn, $_POST['kin_phone']);
        $kin_email      = mysqli_real_escape_string($conn, $_POST['kin_email']);
        $joined         = date('Y-m-d');

        // Error handling
        // Empty fields
        if (empty($surname) || empty($fname) || empty($othernames)) {
            header("Location: ../index.php?division=corporate_service&section=csd-employees&action=add-employee&?q=empty");
            exit();
        } else {
            // Check if employee already exists
            $sql = "SELECT * FROM tbl_employees WHERE surname = '$surname' AND fname = '$fname' AND other_names = '$othernames'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                header("Location: ../index.php?division=corporate_service&section=csd-employees&action=add-employee&q=exists");
                exit();
            } else {
                $sql = "INSERT INTO `tbl_employees`(`surname`, `fname`, `other_names`, `gender`, `dob`, `marital_status`, `address`, `phone_no`, `email`, `state`, `poo`, `payroll_no`, `kin_fullname`, `kin_address`, `kin_phone`, `kin_email`, `joined`) VALUES ('{$surname}', '{$fname}', '{$othernames}', '{$gender}', '{$dob}', '{$marital_status}','{$postal_address}', '{$phone}', '{$email}', '{$state}', '{$poo}', '{$payroll_no}', '{$kin_fullname}', '{$kin_address}', '{$kin_phone}', '{$kin_email}', '{$joined}')";
                
                mysqli_query($conn, $sql);

                header("Location: ../index.php?division=corporate_service&section=csd-employees&q=added-successfully");
                exit();

            }
        }

    } else {
        header("Location: ../index.php?division=corporate_service&section=csd-employees");
        exit();
    }