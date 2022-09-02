<?php

   include('layout.php');

?>

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


<?php include 'footer.php' ?>