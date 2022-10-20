<?php

include 'config.php';


function fetchEmployees() {
    global $conn;

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $records_per_page = 10;
    $offset = ($page-1) * $records_per_page;

    $total_pages_sql = "SELECT COUNT(*) FROM tbl_employees";
    $result = mysqli_query($conn, $total_pages_sql);
    $rows = mysqli_fetch_array($result)[0];
    $total_pages = ceil($rows / $records_per_page);

    $sql = "SELECT * FROM tbl_employees LIMIT $offset, $records_per_page";
    $employees = mysqli_query($conn, $sql);
	return $employees;
}

function CountTotalEmployees() {
    global $conn;
    $sql = "SELECT count(*) as employees FROM `tbl_employees`";
    $result = mysqli_query($conn, $sql);
    $totalEmps = mysqli_fetch_assoc($result);
    return $totalEmps;
}

function countTotalDepts() {
    global $conn;
    $sql = "SELECT count(*) as departments FROM `tbl_departments`";
    $result = mysqli_query($conn, $sql);
    $departments = mysqli_fetch_assoc($result);
    return $departments;
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


function getDepartments() {
	global $conn;
	$sql = "SELECT * FROM tbl_departments";
	$depts = mysqli_query($conn, $sql);
	return $depts;
}