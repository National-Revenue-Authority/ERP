<?php

include_once 'config.php';

if (isset($_POST['save'])) {
    
    $name = mysqli_real_escape_string($conn, $_POST['dept_name']);
    $dept_code = mysqli_real_escape_string($conn, $_POST['dept_id']);
    $hod = mysqli_real_escape_string($conn, $_POST['hod_title']);
    $id = $_GET['id'];

    $sql = "UPDATE `tbl_departments` SET `dept_name`='$name', `dept_code`='$dept_code', `hod`='$hod' WHERE `id` = '$id'";
    mysqli_query($conn, $sql);

    header("Location: ../index.php?division=corporate_service&section=csd-departments&q=success");
    exit();

} else {
    header("Location: ../index.php?division=corporate_service&section=csd-departments");
    exit();
}