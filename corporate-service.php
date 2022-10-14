<?php 

// ini_set('display_errors', 1);
// error_reporting(-1);

    include 'layout.php';
    include 'includes/config.php';

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

?>

<?php if (section == ''): ?>

    <div class="col-10">
        <div class="row">
            <h6 style="color: #909090;padding-top:20px"> DASHBOARD</h6>
            <div class="col-3" style="background-color:rgb(24, 133, 184);width:23%;height:100px; border-radius:5px;margin-left:14px">
                <img src="img/sqr.png" alt="" id="dash-icon">
                <h3 style="color:#fff;padding-top:20px;font-weight:bold">5</h3>
                <h6 style="color:#fff;padding-top:10px">Divisions</h6>
            </div>
            <div class="col-3" style="background-color:rgb(175, 44, 70);width:23%;height:100px; border-radius:5px;margin-left:14px">
                <img src="img/dp.png" alt="" id="dash-icon">
                <h3 style="color:#fff;padding-top:20px;font-weight:bold">15</h3>
                <h6 style="color:#fff;padding-top:10px">Departments</h6>
            </div>
            <div class="col-3" style="background-color:rgb(238, 171, 26);width:23%;height:100px; border-radius:5px;margin-left:14px">
                <img src="img/staf.png" alt="" id="dash-icon">
                <h3 style="color:#fff;padding-top:20px;font-weight:bold">184</h3>
                <h6 style="color:#fff;padding-top:10px">Employees</h6>
            </div>
            <div class="col-3" style="background-color:rgb(75, 155, 75);width:23%;height:100px; border-radius:5px;margin-left:14px">
                <img src="img/ss.png" alt="" id="dash-icon">
                <h3 style="color:#fff;padding-top:20px;font-weight:bold">7</h3>
                <h6 style="color:#fff;padding-top:10px">Leaves</h6>
            </div>
                
            <div class="col-3" style="color:#fff;background-color:rgb(24, 133, 184);width:23%;height:35px; border-radius:5px;margin-left:14px">
                <P style="color:#fff;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
            </div>
            <div class="col-3" style="background-color:rgb(160, 40, 64);width:23%;height:35px; border-radius:5px;margin-left:14px">
                <P style="color:#fff;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
            </div>
            <div class="col-3" style="background-color:rgb(224, 160, 22);width:23%;height:35px; border-radius:5px;margin-left:14px">
                <P style="color:#fff;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
            </div>
            <div class="col-3" style="background-color:rgb(65, 136, 65);width:23%;height:35px; border-radius:5px;margin-left:14px">
                <P style="color:#fff;font-size: 11px;padding-top:10px;text-align:center">NRA-CSD</P>
            </div>
        </div>
        <div class="row">
            <!-- More content here -->
        </div>
    </div>

<?php elseif (section == 'csd-departments'): ?>

    <div class="col-10">
        <div class="row">
            <div class="col-12">
                <form action="" method="POST">
                    <div class="col-md-4" style="float: right; margin-top:10px">
                        <input type="text" name="search" class="form-control" placeholder="Search department by name" style="font-size:13px;border-radius:50px">
                    </div>
                </form>

                <div class="add-btn">
                    <button class="enquire-btn" data-bs-toggle="modal" data-bs-target="#enquire1" style="padding:5px 50px;border:none;background:rgb(24, 133, 184);border-radius:3px;color:#fff;margin:10px 90px">Add</button>
                </div>

                <div class="modal fade" id="enquire1" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="modal-title text-dark" id="enquireLabel">Add new department by filling the form below.</p>
                                <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="connection/csd-add-dept.inc.php" method="post">
                                    <input type="text" name="dept_name" class="form-control" placeholder="Department Name"><br>
                                    <input type="text" name="dept_id" class="form-control" placeholder="Department Code"><br>
                                    <input type="text" name="hod_title" class="form-control" placeholder="HOD Title"><br>
                                    <input type="text" name="no_staff" class="form-control" placeholder="No. of Staff"><br>
                                    <input type="submit" class="verify-btn" name="submit" value="Submit"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr style="font-size:13px">
                        <th>#</th>
                        <th>Department-Name</th>
                        <th>Code</th>
                        <th>HOD-Title</th>
                        <th>No. of Staff</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:13px">
                            <td>1</td>
                            <td>Name Here</td>
                            <td>Dept ID</td>
                            <td>HOD <Title></Title></td>
                            <td style="text-align:center">No. of staff</td>
                            <td><a href="#" class="action-link"><a href="human-resource.php" class="action-link text-primary">View</a></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php elseif (section == 'csd-employees'): ?>

    <?php if (action == ''): ?>

        <div class="col-10">
            <div class="row">
                <div class="col-12 mb-3">

                    <form action="" method="POST">
                        <div class="col-md-4" style="float: right; margin-top:10px">
                            <input type="text" name="search" class="form-control" placeholder="Search employee by name" style="font-size:13px;border-radius:50px">
                        </div>
                    </form>
                    
                    <a href="index.php?division=corporate_service&section=csd-employees&action=add-employee"><button style="padding:5px 50px;border:none;background:rgb(24, 133, 184);border-radius:3px;color:#fff;margin:10px 90px">Add</button></a>
                </div>

                <div class="col-12">
                    <div class="row">
                        
                        <?php foreach ($employees as $emp): ?>

                            <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:15px;border-right:12px solid #bebebe">
                                <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                                <h6 style="padding-top:10px">
                                    <?php echo $emp['fname']. ' ' .$emp['other_names']. ' ' .$emp['surname'] ?>
                                </h6>
                                <p>
                                    IT Officer<br>
                                    <span style="border-left:5px solid orange;padding-left:10px">Department ICT, Division Headquarters</span><br>
                                    <img src="img/email.png" alt="" style="width:20px;height:20px"> <?php echo $emp['email'] ?><br>
                                    <img src="img/phones.png" alt="" style="width:20px;height:20px"> <?php echo $emp['phone_no'] ?>
                                    <a href="#" style="float:right;padding-right:25px">View</a>
                                </p>
                            </div>

                        <?php endforeach ?>

                    </div>

                </div>
                <div style="text-align:center;font-size:14px;color:#666666;margin:20px 0">

                    <ul class="pagination">
                        <li><a href="?division=corporate_service&section=csd-employees&?page=1">First</a></li>
                        <li class="<?php if ($page <=1) { echo 'disabled'; } ?>">
                            <a href="<?php if($page <=1){ echo "?division=corporate_service&section=csd-employees&?page=".($page - 1); } else { echo '#'; } ?>">Prev</a>
                        </li>
                        
                        <li class="<?php if ($page >= $total_pages) { echo 'disabled'; } ?>">
                            <a href="<?php if($page <= $total_pages){ echo "?division=corporate_service&section=csd-employees&?page=".($page + 1); } else { echo "#"; } ?>">Next</a>
                        </li>
                        <li><a href="?division=corporate_service&section=csd-employees&?page=<?php echo $total_pages; ?>">Last</a></li>
                    </ul>

                </div>
            </div>
        </div>

    <?php elseif (action == 'add-employee'): ?>

        <div class="col-10">
            <div class="row">
                <div class="container">
                    <div class="appointment-form">
                        <div class="row" style="font-weight:bold;">
                            <h2 style="font-weight:bold;color:#707070">Employee Registration Form</h2>
                            <h5 style="font-weight:bold;padding-left:700px;color:#707070">F-SFT-007-E</h5>
                        </div>
                    
                        <form action="includes/add_employee.inc.php" method="POST">
                            <div class="row">
                                <h4 class="admin-header">1.a. Personal Details</h4>
                                <h6 class="" style="padding-bottom:20px">Please make sure you review the information entered below before submitting.</h6>

                                <div class="form-group col-6">
                                    <label for="">Surname</label>
                                    <input type="text" class="form-control" placeholder="Enter surname" name="surname"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter first name" name="fname"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Other Names (in full)</label>
                                            <input type="text" class="form-control" placeholder="Enter other names" name="othernames"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Gender</label>
                                    <select class="form-select" aria-label="" name="gender">
                                        <option selected>Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <!-- <option value="others">Others</option> -->
                                    </select>
                                </div>
                                <div class="col-6 md-form md-outline input-with-post-icon datepicker">
                                    <label for="dob">Date of Birth</label>
                                    <input placeholder="Select date" type="date" name="dob" id="dob" class="form-control" style="color:#707070">
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Marital Status</label>
                                    <select class="form-select" aria-label="" name="marital_status">
                                        <option selected>Select Status</option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="separated">Separated</option>
                                        <option value="widowed">Widowed</option>
                                    </select>                  
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Postal Address</label>
                                    <input type="text" class="form-control" placeholder="e.g. Munuki 107, Juba City" name="postal_address"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Tel. No.</label>
                                    <input type="text" class="form-control" placeholder="9xxxxxxxx" name="phone"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="you@gmail.com" name="email"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">State</label>
                                    <select class="form-select" aria-label="" name="state">
                                        <option selected>Select State</option>
                                        <option value="central">Central Equatoria</option>
                                        <option value="eastern">Eastern Equatoria</option>
                                        <option value="western">Western Equatoria</option>
                                        <option value="jonglei">Jonglei State</option>
                                        <option value="lakes">Lakes State</option>
                                        <option value="warap">Warap State</option>
                                        <option value="unity">Unity State</option>
                                    </select>                  
                                </div>

                                <div class="form-group col-6">
                                    <label for="">Domicile/Place of Origin</label>
                                    <select class="form-select" aria-label="" name="poo">
                                        <option selected>Select City</option>
                                        <option value="single">Juba</option>
                                        <option value="married">Wau</option>
                                        <option value="separated">Malakal</option>
                                        <option value="widowed">Maridi</option>
                                        <option value="widowed">Torit</option>
                                        <option value="widowed">Bor</option>
                                        <option value="widowed">Nimule</option>
                                        <option value="widowed">Yambio</option>
                                        <option value="widowed">Aweil</option>
                                        <option value="widowed">Yei</option>
                                        <option value="widowed">Rumbek</option>
                                        <option value="widowed">Tonj</option>
                                    </select>                             
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Payroll Number</label>
                                    <input type="text" class="form-control" placeholder="Payroll number" name="payroll_no"/>
                                </div>

                                <h4 class="admin-header">b. Spouse Details</h4>
                                <div class="form-group col-6">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Enter full name" name="kin_fullname"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Postal Address</label>
                                    <input type="text" class="form-control" placeholder="e.g. Munuki 107, Juba City" name="kin_address"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Tel. No.</label>
                                    <input type="text" class="form-control" placeholder="9xxxxxxxx" name="kin_phone"/>
                                </div>
                                <div class="form-group col-6">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" placeholder="you@gmail.com" name="kin_email"/>
                                </div>
                            </div>
                            <input type="submit" class="verify-btn" name="submit_employee" value="Submit"/>
                            <p class="privacy-policy">By Submitting Account, you accepted NRA <a href="">Terms of Use</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>


    <?php elseif (section == 'csd-payroll'): ?>

    <div class="col-10">
        <div class="row">
            <div class="col-12">

                <form action="" method="POST">
                    <div class="col-md-4" style="float: right; margin-top:10px">
                        <input type="text" name="search" class="form-control" placeholder="Search by name" style="font-size:13px;border-radius:50px">
                    </div>
                </form>

                <div class="add-btn">
                    <button class="enquire-btn" data-bs-toggle="modal" data-bs-target="#enquire2" style="padding:5px 50px;border:none;background:rgb(24, 133, 184);border-radius:3px;color:#fff;margin:10px 90px">Add</button>
                </div>

                <div class="modal fade" id="enquire2" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p class="modal-title text-dark" id="enquireLabel">Add new staff to the payroll by filling the form below.</p>
                                <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="connection/add-payroll.inc.php" method="post">
                                    <input type="text" name="emp_id" class="form-control" placeholder="Employee ID"><br>
                                    <input type="text" name="emp_name" class="form-control" placeholder="Employee Name"><br>
                                    <input type="text" name="title" class="form-control" placeholder="Title"><br>
                                    <input type="text" name="department" class="form-control" placeholder="Department"><br>
                                    <input type="text" name="grade" class="form-control" placeholder="Grade"><br>
                                    <input type="text" name="gross_salary" class="form-control" placeholder="Gross Salary"><br>
                                    <input type="text" name="net_salary" class="form-control" placeholder="Net Salary"><br>
                                    <input type="text" name="account_no" class="form-control" placeholder="Account No."><br>
                                    <input type="text" name="bank" class="form-control" placeholder="Bank"><br>
                                    <input type="text" name="joined" class="form-control" placeholder="Month"><br>
                                    <input type="text" name="deductions" class="form-control" placeholder="Deductions"><br>
                                    <input type="submit" class="verify-btn" name="submit" value="Submit"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr style="font-size:13px">
                            <th>#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Department</th>
                            <th>Grade</th>
                            <th>Gross-Salary</th>
                            <th>Net-Salary</th>
                            <th>Account-Number</th>
                            <th>Bank</th>
                            <th>Month</th>
                            <th>Deductions</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="font-size:13px">
                            <td>1</td>
                            <td>Emp ID</td>
                            <td>Emp Name</td>
                            <td>Title</td>
                            <td>department</td>
                            <td>grade</td>
                            <td>gross salary</td>
                            <td>net salary</td>
                            <td>account_no</td>
                            <td>bank</td>
                            <td>joined</td>
                            <td>deductions</td>
                            <td><a href="#" class="action-link"><a href="#" class="action-link text-primary">View</a></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php elseif (section == 'attendance'): ?>

    <div class="col-10">
        <div class="row">
            <div class = "admin" >
                <div class = "alert alert-primary">Attendance List</div>
                    <div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
                
                    </div>
                    <div class = "well col-lg-12">
                        <table id="table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Log Type</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>	
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>	
                            </tbody>
                        </table>	
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif ?>