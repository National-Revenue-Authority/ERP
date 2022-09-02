<?php if (division == 'corporate_service'): ?>

    <ul class="dashboard-links">
        <h5 style="color:lightblue;border-bottom:1px solid skyblue;padding-top:30px"> Corporate Service</h5>
        <li><a href=''><img src="img/inv.png" alt="" id="btn-icon"> Divisions</a></li>
        <li><a href='csd-departments.php'><img src="img/deptm.png" alt="" id="btn-icon"> Departments</a></li>
        <li><a href='csd-employees.php'><img src="img/staf.png" alt="" id="btn-icon"> Employees</a></li>
        <li><a href='#'><img src="img/dash.png" alt="" id="btn-icon"> Leaves</a></li>
        <li><a href='#'><img src="img/inv.png" alt="" id="btn-icon"> Calender</a></li><br><br>
        <p style="color:#ccc;font-weight:bold;font-size:13px">EXTRA SERVICES</p>
        <li><a href='#'><img src="img/staf.png" alt="" id="btn-icon"> Attendence</a></li>
        <li><a href='csd-payroll.php'><img src="img/repo.png" alt="" id="btn-icon"> Payroll</a></li><br>
        <p style="color:#909090;font-size:12px;padding-top:80px;padding-right:20px;border-top:1px solid #404040" class="text-center">&copy National Revenue Authority <br>Republic of South Sudan<br>Headquarters - Jebel</p>
    </ul>

<?php endif ?>

<?php if (division == ''): ?>

    <ul class="dashboard-links">
        <li><a href='' id="act-link"><img src="img/dash.png" alt=""  id="btn-icon" style="font-weight:bold;color:#bebebe"> Dashboard</a></li>
        <li><a href=''><img src="img/inv.png" alt="" id="btn-icon"> Divisions</a></li>
        <li><a href='departments.php'><img src="img/deptm.png" alt="" id="btn-icon"> Departments</a></li>
        <li><a href='employees.php'><img src="img/staf.png" alt="" id="btn-icon"> Employees</a></li>
        <li><a href='#'><img src="img/staf.png" alt="" id="btn-icon"> Payroll</a></li>
        <li><a href='#'><img src="img/leave.png" alt="" id="btn-icon"> Leaves</a></li><br><br>
        <p style="color:#505050;font-weight:bold;font-size:13px">EXTRA SERVICES</p>
        <li><a href='inventory.php'><img src="img/inv.png" alt="" id="btn-icon"> Inventory</a></li>
        <li><a href='repository.php'><img src="img/repo.png" alt="" id="btn-icon"> Repository</a></li>
    </ul>

<?php endif ?>
