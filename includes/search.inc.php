<?php 

	include "config.php";

    if (isset($_GET['search'])) {
    	
        $search = $_GET['search'];

        $sql = "SELECT * FROM `tbl_departments` WHERE `dept_name` LIKE \'$search\' OR `dept_code` LIKE \'$search\' OR `hod` LIKE \'$search\'";
        $searchResults = mysqli_query($conn, $sql);

    }

        