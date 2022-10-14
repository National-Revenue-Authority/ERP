<?php

include 'config.php';


function fetchEmployees() {
    global $conn;
    $sql = "SELECT * FROM tbl_employees LIMIT $offset, $records_per_page";
    $employees = mysqli_query($conn, $sql);
    return $employees;
}

function getEmployee($id) {
	global $conn;
	$id = $_GET['q'];
	$sql = "SELECT * FROM tbl_employees WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_assoc($result);
	return $employee;
}

function formatDate($date) {
    return date('d-m-Y', strtotime($date));
}
