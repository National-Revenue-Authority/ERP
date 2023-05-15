<?php 

// ini_set('display_errors', 1);
// error_reporting(-1);

    include 'layout.php';
    include 'includes/functions.php';

    $employees = fetchEmployees();
    $depts = getDepartments();
    $totalEmps = CountTotalEmployees();
    $departments = countTotalDepts();

?>

<?php if (section == ''): ?>


    <div class="col-10">

        <div class="row">
            <h6 style="color: #909090;padding-top:20px"> DASHBOARD</h6>
            <div class="col-3" style="background-color:rgb(24, 133, 184);width:23%;height:100px; border-radius:5px;margin-left:14px">
                <img src="assets/img/bag.png" alt="" id="dash-icon">
                <h3 style="color:#fff;padding-top:20px;font-weight:bold">5</h3>
                <h6 style="color:#fff;padding-top:10px">Divisions</h6>
            </div>
            <div class="col-3" style="background-color:rgb(175, 44, 70);width:23%;height:100px; border-radius:5px;margin-left:14px">
                <img src="assets/img/dp.png" alt="" id="dash-icon">
                <h3 style="color:#fff;padding-top:20px;font-weight:bold"><?php echo $departments['departments'] ?></h3>
                <h6 style="color:#fff;padding-top:10px">Departments</h6>
            </div>
            <div class="col-3" style="background-color:rgb(238, 171, 26);width:23%;height:100px; border-radius:5px;margin-left:14px">
                <img src="assets/img/staf.png" alt="" id="dash-icon">
                <h3 style="color:#fff;padding-top:20px;font-weight:bold"><?php echo $totalEmps['employees'] ?></h3>
                <h6 style="color:#fff;padding-top:10px">Employees</h6>
            </div>
            <div class="col-3" style="background-color:rgb(75, 155, 75);width:23%;height:100px; border-radius:5px;margin-left:14px">
                <img src="assets/img/2ss.png" alt="" id="dash-icon">
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

    <?php if (action == ''): ?>

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
                                    <form action="includes/add_department.inc.php" method="POST">
                                        <div class="form-group">
                                            <label for="dept_name">Department Name</label>
                                            <input type="text" name="dept_name" class="form-control" placeholder="Department Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="dept_id">Department Code</label>
                                            <input type="text" name="dept_id" class="form-control" placeholder="Department Code">
                                        </div>
                                        <div class="form-group">
                                            <label for="hod_title">HOD Title</label>
                                            <input type="text" name="hod_title" class="form-control" placeholder="HOD Title">
                                        </div>
                                        <input type="submit" class="verify-btn" name="submit" value="Add"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr style="font-size:13px">
                                <th>#</th>
                                <th>Department Name</th>
                                <th>Department Code</th>
                                <th>Head Of Department</th>
                                <th>No. of Staff</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $count = 1; ?>

                            <?php foreach ($depts as $dept): ?>

                                <tr style="font-size:13px">
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $dept['dept_name'] ?></td>
                                    <td><?php echo $dept['dept_code'] ?></td>
                                    <td><?php echo $dept['hod'] ?></td>
                                    <td style="text-align:center">No. of staff</td>
                                    <td>
                                        <a href="index.php?division=corporate_service&section=csd-departments&action=edit-department&id=<?php echo $dept['id'] ?>" class="action-link btn btn-sm btn-outline-success">Edit</a>
                                        <a href="index.php?division=corporate_service&section=csd-departments&action=delete-department&id=<?php echo $dept['id'] ?>" class="action-link btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>

                            <?php endforeach ?>

                        </tbody>
                    </table>

                    <?php 

                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                        if (strpos($fullUrl, "q=success") == true) {
                            echo "
                                <div class='alert alert-success account-dialog' role='alert'>
                                Department edited successfully
                                </div>
                            ";
                            exit();
                        } elseif (strpos($fullUrl, "d=success") == true) {
                            echo "
                                <div class='alert alert-success account-dialog' role='alert'>
                                Department deleted!
                                </div>
                            ";
                            exit();
                        } elseif (strpos($fullUrl, "d=error") == true) {
                            echo "
                                <div class='alert alert-warning account-dialog' role='alert'>
                                An error occured, please try again!
                                </div>
                            ";
                            exit();
                        } elseif (strpos($fullUrl, "dpt=empty") == true) {
                            echo "
                                <div class='alert alert-warning account-dialog' role='alert'>
                                Empty fields, please try again!
                                </div>
                            ";
                            exit();
                        } elseif (strpos($fullUrl, "dpt=exists") == true) {
                            echo "
                                <div class='alert alert-warning account-dialog' role='alert'>
                                Department already exists!
                                </div>
                            ";
                            exit();
                        } elseif (strpos($fullUrl, "dpt=success") == true) {
                            echo "
                                <div class='alert alert-success account-dialog' role='alert'>
                                Department added successfully. 
                                </div>
                            ";
                            exit();
                        }
                    ?>

                </div>
            </div>
        </div>

    <?php elseif (action == 'edit-department'): ?>

        <?php 

            $id = $_GET['id'];
            $sql = "SELECT * FROM tbl_departments WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($result);

            if (isset($_POST['save'])) {
                $name = mysqli_real_escape_string($conn, $_POST['dept_name']);
                $dept_code = mysqli_real_escape_string($conn, $_POST['dept_id']);
                $hod = mysqli_real_escape_string($conn, $_POST['hod_title']);

                $sql = "UPDATE `tbl_departments` SET `dept_name`='$name', `dept_code`='$dept_code', `hod`='$hod' WHERE `id` = '$id'";
                mysqli_query($conn, $sql);

                echo "<script>window.location = 'index.php?division=corporate_service&section=csd-departments&q=success'</script>";

            } 
            
            
        ?>

        <div class="col-6">
            <div class="row">
                <div class="container">
                    <div class="appointment-form">
                        <div class="row" style="font-weight:bold;">
                            <h2 style="font-weight:bold;color:#707070;margin-bottom:40px;">Edit Department</h2>
                        </div>
                    
                        <form action="" method="POST">
                            <div class="row">

                                <div class="form-group">
                                    <label for="dept_name">Department Name</label>
                                    <input type="text" name="dept_name" class="form-control" value="<?php echo $data['dept_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="dept_id">Department Code</label>
                                    <input type="text" name="dept_id" class="form-control" value="<?php echo $data['dept_code']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="hod_title">HOD Title</label>
                                    <input type="text" name="hod_title" class="form-control" value="<?php echo $data['hod']; ?>">
                                </div>
                            </div>
                            <input type="submit" class="verify-btn" name="save" value="Save Changes"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php elseif (action == 'delete-department'): ?>

        <?php
        
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "DELETE FROM `tbl_departments` WHERE `id` = '$id'";
                mysqli_query($conn, $sql);

                echo "<script>window.location = 'index.php?division=corporate_service&section=csd-departments&d=success'</script>";
            } else {
                echo "<script>window.location = 'index.php?division=corporate_service&section=csd-departments&d=error'</script>";
            }
        
        ?>

    <?php elseif (action == 'search-department'): ?>

        <?php 

            if (isset($_POST['search'])) {
                
                $search = mysqli_real_escape_string($conn, $_POST['search']);

                $sql = "SELECT * FROM `tbl_departments` WHERE `dept_name` LIKE \'$search\' OR `dept_code` LIKE \'$search\' OR `hod` LIKE \'$search\'";
                $searchResults = mysqli_query($conn, $sql);

            }

        ?>

        <div class="col-10">
            <div class="row">
                <div class="col-12">

                    <form action="index.php?division=corporate_service&section=csd-departments&action=search-department" method="POST">
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
                                    <form action="includes/add_department.inc.php" method="POST">
                                        <div class="form-group">
                                            <label for="dept_name">Department Name</label>
                                            <input type="text" name="dept_name" class="form-control" placeholder="Department Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="dept_id">Department Code</label>
                                            <input type="text" name="dept_id" class="form-control" placeholder="Department Code">
                                        </div>
                                        <div class="form-group">
                                            <label for="hod_title">HOD Title</label>
                                            <input type="text" name="hod_title" class="form-control" placeholder="HOD Title">
                                        </div>
                                        <input type="submit" class="verify-btn" name="submit" value="Add"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr style="font-size:13px">
                                <th>#</th>
                                <th>Department Name</th>
                                <th>Department Code</th>
                                <th>Head Of Department</th>
                                <th>No. of Staff</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $count = 1; ?>

                            <?php foreach ($searchResults as $search): ?>

                                <tr style="font-size:13px">
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $search['dept_name'] ?></td>
                                    <td><?php echo $search['dept_code'] ?></td>
                                    <td><?php echo $search['hod'] ?></td>
                                    <td style="text-align:center">No. of staff</td>
                                    <td>
                                        <a href="index.php?division=corporate_service&section=csd-departments&action=edit-department&id=<?php echo $search['id'] ?>" class="action-link btn btn-sm btn-outline-success">Edit</a>
                                        <a href="index.php?division=corporate_service&section=csd-departments&action=delete-department&id=<?php echo $search['id'] ?>" class="action-link btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>

                            <?php endforeach ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        

    <?php endif ?>

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
                                <img src="assets/img/avatar.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                                <h6 style="padding-top:10px">
                                    <?php echo $emp['fname']. ' ' .$emp['other_names']. ' ' .$emp['surname'] ?>
                                </h6>
                                <p>
                                    IT Officer<br>
                                    <span style="border-left:5px solid orange;padding-left:10px">Department ICT, Division Headquarters</span><br>
                                    <img src="assets/img/email.png" alt="" style="width:20px;height:20px"> <?php echo $emp['email'] ?><br>
                                    <img src="assets/img/phones.png" alt="" style="width:20px;height:20px"> <?php echo $emp['phone_no'] ?>
                                    <a href="index.php?division=corporate_service&section=csd-employees&action=view&id=<?php echo $emp['id'] ?>" style="float:right;padding-right:25px">View</a>
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


    <?php elseif (action == 'view'): ?>

        <?php
            
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM `tbl_employees` WHERE `id` = '$id'";
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_assoc($result);
            }
            
        ?>

        <div class="col-10">
            <div class="row">
                
                <div class="col-12">
                    <div class="container">
                        <form action="" method="POST">
                            <div class="col-md-4" style="float: right; margin-top:10px">
                                <input type="text" name="search" class="form-control" placeholder="Search department by name" style="font-size:13px;border-radius:50px">
                            </div>
                        </form>

                        <div class="add-btn">
                            <h4 class="pt-3">Human Resource</h4>
                        </div>

                        <p class="pt-3 pb-3 mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum officiis, eveniet nulla hic iure voluptate! Reiciendis distinctio nulla assumenda quam temporibus sunt obcaecati saepe alias totam quo! Minima, harum modi.</p>
                        <div class="row">
                            <div class="col">
                                <button class="dept-info1">Division<br>Corporate Service</button>
                            </div>
                            <div class="col">
                                <button class="dept-info2">Department Code<br>CSD-105</button>
                            </div>
                            <div class="col">
                                <button class="dept-info3">Number of Staff<br><?php echo $totalEmps['employees'] ?></button>
                            </div>
                            <div class="col">
                                <button class="dept-info4">Head of Department Title<br>Assistant Commissioner for Human Resource</button>
                            </div>
                        </div>
                        
                        <h5 style="padding:20px 0">Employee's Details</h5>

                        <div class="card" style="width: 25rem;">
                            <img class="card-img-top rounded-circle" src="assets/img/avatar.svg" alt="Card image cap" height="300px">
                            <!-- <form action="">
                                <input type="file" name="profile" class="custom-file-control">
                            </form> -->
                            <div class="card-body">
                                <p class="card-text">Name: <?php echo $data['fname']. ' ' .$data['other_names']. ' ' .$data['surname'] ?></p>
                                <p class="card-text">Title: Assistant Finance Manager</p>
                                <p class="card-text">Email: <?php echo $data['email'] ?></p>
                                <p class="card-text">Tel: <?php echo $data['phone_no'] ?></p>
                            </div>
                        </div>
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

<?php elseif (section == 'calendar'): ?>

    <div class="col-10">
        <div class="row">
            <div class = "admin" >
                <div id="calendar"></div>
            </div>
        </div>
    </div>

<?php elseif (section == 'leaves'): ?>

    <div class="col-10">
        <div class="row">
        <div class="col-12">

            <form action="" method="POST">
                <div class="col-md-4" style="float: right; margin-top:10px">
                    <input type="text" name="search" class="form-control" placeholder="Search by name" style="font-size:13px;border-radius:50px">
                </div>
            </form>

            <h2 class="text-center">Coming Soon!</h2>
            
        </div>
    </div>

<?php endif ?>