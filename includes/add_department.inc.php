<?php

include_once 'config.php';

if (isset($_POST['submit'])) {
    
    $name = mysqli_real_escape_string($conn, $_POST['dept_name']);
    $dept_code = mysqli_real_escape_string($conn, $_POST['dept_id']);
    $hod = mysqli_real_escape_string($conn, $_POST['hod_title']);

    if (empty($name) || empty($dept_code) || empty($hod)) {
        header("Location: ../index.php?division=corporate_service&section=csd-departments&q=empty");
        exit();
    } else {
        // Check if department already exists
        $sql = "SELECT * FROM tbl_departments WHERE dept_name = '$name' AND dept_code = '$dept_code' AND hod = '$hod'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck >= 1) {
            header("Location: ../index.php?division=corporate_service&section=csd-departments&q=exists");
            exit();
        } else {
            // Insert into DB
            $sql = "INSERT INTO `tbl_departments`(`dept_name`, `dept_code`, `hod`) VALUES ('$name', '$dept_code', '$hod')";
            mysqli_query($conn, $sql);

            header("Location: ../index.php?division=corporate_service&section=csd-departments&q=success");
            exit();

        }
    }

} else {
    header("Location: ../index.php?division=corporate_service&section=csd-departments");
    exit();
}