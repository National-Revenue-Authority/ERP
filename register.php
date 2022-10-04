<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&display=swap" rel="stylesheet">
    
    <title>National Revenue Authority</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css?v=<?php echo time();?>">
</head>

<body>
    <header class="header-bg">
        <a href="corporate-service.php"><img src="assets/img/nralogo.svg" class="navbar-logo" alt=""></a>
        <nav>   
            <ul class="nav-links">
                <li><a href='corporate-service.php' class="active">Dashboard</a></li>
                <li><a href='divisions.php'>Divisions</a></li>
                <li><a href='csd-departments.php'>Departments</a></li>
                <li><a href='csd-employees.php'>Employees</a></li>
                <li><a href='#'>Attendence</a></li>
                <li><a href='#'>Leave</a></li>
                <li><a href='csd-payroll.php'>Payroll</a></li>
                <li><a href='logout.php' class="signout-link">Signout</a></li>
            </ul>
        </nav>
    </header>
   
    <div class="row" style="padding-top: 70px;">
        <div class="col-2" style="background: #202020">
            <ul class="dashboard-links">
                <h5 style="color:lightblue;border-bottom:1px solid skyblue;padding-top:30px"> Corporate Service</h5>
                <li><a href='divisions.php'><img src="img/inv.png" alt="" id="btn-icon"> Divisions</a></li>
                <li><a href='csd-departments.php'><img src="img/deptm.png" alt="" id="btn-icon"> Departments</a></li>
                <li><a href='csd-employees.php'><img src="img/staf.png" alt="" id="btn-icon"> Employees</a></li>
                <li><a href='#'><img src="img/dash.png" alt="" id="btn-icon"> Leaves</a></li>
                <li><a href='#'><img src="img/inv.png" alt="" id="btn-icon"> Calender</a></li><br><br>
                <p style="color:#ccc;font-weight:bold;font-size:13px">EXTRA SERVICES</p>
                <li><a href='#'><img src="img/staf.png" alt="" id="btn-icon"> Attendence</a></li>
                <li><a href='csd-payroll.php'><img src="img/repo.png" alt="" id="btn-icon"> Payroll</a></li><br>
                <p style="color:#909090;font-size:12px;padding-top:80px;padding-right:20px;border-top:1px solid #404040" class="text-center">&copy National Revenue Authority <br>Republic of South Sudan<br>Headquarters - Jebel</p>
            </ul>
        </div>
     
        <div class="col-10">
            <div class="row">
                <div class="appointment-form">
                    <form action="includes/register.inc.php" method="POST">
                        <div class="row">
                            <h3 class="admin-header">Register an Account</h1>
                            <h6 class="">Please make sure you use a strong password</h6>
                            <div class="form-group col-6">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" placeholder="Enter your first name" name="fname"/>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter your first name" name="lname"/>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Email</label>
                                <input type="text" class="form-control" placeholder="you@example.com" name="email"/>
                                <!-- <p>We'll never share your email with anyone else</p> -->
                            </div>
                            <div class="form-group col-6">
                                <label for="">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username"/>
                                <!-- <p>We'll never share your number with anyone else</p> -->
                            </div>
                            
                            <div class="form-group col-6">
                                <label for="">Division</label>
                                <select name="division" id="division" class="form-select">
                                    <option value="0">Select Division</option>
                                    <option value="customs">Customs</option>
                                    <option value="corporate_service">Corporate Service</option>
                                    <option value="domestic_tax">Domestic Tax</option>
                                    <option value="internal_audit">Internal Audit</option>
                                    <option value="internal_affairs">Internal Affairs</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Password</label>
                                <input type="password" class="form-control" placeholder="Enter your password" name="passcode"/>
                                <p>Mininum of 8 characters (e.g. Nura2@#a!)</p>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm your password" name="cpassword"/>
                                <p>Re-type the password. </p>
                            </div>

                            <input type="submit" class="appointment-btn" name="submit" value="Register User"/>
                            <!-- <p class="privacy-policy">By Creating Account, you accepted NRA <a href="">Terms of Use</a></p>
                            <p class="privacy-policy">Have an Account? <a href="login.php">Sign In</a></p> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center">Copyright &copy National Revenue Authority - Republic of South Sudan <script>document.write(new Date().getFullYear())</script>. All Rights Reserved | 
        <a href="">Privacy Policy.</a>
    </footer>

</body>
</html>