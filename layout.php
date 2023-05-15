<?php 

$requests = ['section', 'division', 'action', 'role'];

foreach ($requests as $req) {
    if (isset($_GET[$req])) {
        define($req, $_GET[$req]);
    }
    else {
        define($req, "");
    }
}

ini_set("max_execution_time", 180000);

if (isset($_COOKIE['username']) AND isset($_COOKIE['division'])) {
    $username = $_COOKIE['username'];
    $division = $_COOKIE['division'];
}
else {
    header("Location: login.php?q=sessionexpired");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="NRA ERP system">
    <meta name="author" content="Kuzco Kou Dut, Kuch Paul, Deng Ayiik">
    <link rel="icon" href="#">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&display=swap" rel="stylesheet">
    
    <title>National Revenue Authority</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css?v=<?php echo time();?>">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
</head>

<body>
    <header class="header-bg">
        <a href="index.php?division=<?php echo(base64_decode($_COOKIE['division']))?>">
            <img src="assets/img/nralogo.svg" class="navbar-logo" alt="">
        </a>
        <nav>   
            <ul class="nav-links">
                <li>Hello, <?php echo(base64_decode($_COOKIE['username']))?></li>
                <li><a href="index.php?division=<?php echo(base64_decode($_COOKIE['division']))?>" class="active">Dashboard</a></li>
                <li><a href=''>Divisions</a></li>
                <li><a href='index.php?division=<?php echo(base64_decode($_COOKIE['division']))?>&section=csd-departments'>Departments</a></li>
                <li><a href='index.php?division=<?php echo(base64_decode($_COOKIE['division']))?>&section=csd-employees'>Employees</a></li>
                <li><a href='index.php?division=<?php echo(base64_decode($_COOKIE['division']))?>&section=attendance'>Attendence</a></li>
                <li><a href='#'>Leave</a></li>
                <li><a href='index.php?division=<?php echo(base64_decode($_COOKIE['division']))?>&section=csd-payroll'>Payroll</a></li>
                <li>
                    <form action="includes/logout.inc.php" method="post">   
                        <input type="submit" name="submit" value="Signout" class="btn">
                    </form>
                </li>
            </ul>
        </nav>
    </header>

    <?php if (division == 'corporate_service'): ?>

        <div class="row" style="padding-top: 70px;">
            <div class="col-2" style="background: #202020">
                <ul class="dashboard-links">
                    <h5 style="color:lightblue;border-bottom:1px solid skyblue;padding-top:30px"> Corporate Service</h5>
                    <li>
                        <a href=''>
                            <img src="assets/img/inv.png" alt="" id="btn-icon"> Divisions
                        </a>
                    </li>
                    <li>
                        <a href='index.php?division=corporate_service&section=csd-departments'>
                            <img src="assets/img/deptm.png" alt="" id="btn-icon"> Departments
                        </a>
                    </li>
                    <li>
                        <a href='index.php?division=corporate_service&section=csd-employees'>
                            <img src="assets/img/staf.png" alt="" id="btn-icon"> Employees
                        </a>
                    </li>
                    <li>
                        <a href='index.php?division=corporate_service&section=leaves'>
                            <img src="img/dash.png" alt="" id="btn-icon"> Leaves
                        </a>
                    </li>
                    <li>
                        <a href='index.php?division=corporate_service&section=calendar'>
                            <img src="img/inv.png" alt="" id="btn-icon"> Calender
                        </a>
                    </li><br><br>

                    <p style="color:#ccc;font-weight:bold;font-size:13px">EXTRA SERVICES</p>

                    <li>
                        <a href='index.php?division=corporate_service&section=attendance'>
                            <img src="img/staf.png" alt="" id="btn-icon"> Attendence
                        </a>
                    </li>
                    <li>
                        <a href='index.php?division=corporate_service&section=csd-payroll'>
                            <img src="img/repo.png" alt="" id="btn-icon"> Payroll
                        </a>
                    </li><br>

                    <p style="color:#909090;font-size:12px;padding-top:80px;padding-right:20px;border-top:1px solid #404040" class="text-center">&copy National Revenue Authority <br>Republic of South Sudan<br>Headquarters - Jebel</p>
                    
                </ul>
            </div>

    <?php elseif (division == 'customs'): ?>

    
    <?php elseif (division == 'domestic_tax'): ?>
    
    <?php elseif (division == 'internal_audit'): ?>

    <?php elseif (division == 'internal_affairs'): ?>
    
    <?php endif ?>

     

   