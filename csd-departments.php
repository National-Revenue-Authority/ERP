<?php

   include('layout.php');

?>

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


<?php include 'footer.php' ?>