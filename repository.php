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
        <title>NRA-HEADQUARTERS | EXCEL</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time();?>">
    </head>

   <body>
   <header>
   <a href="#"><img src="img/nralogo.svg" class="header-logo" alt=""></a>
        <nav>   
            <ul class="nav-links">
                <li><a href='headquarters.php'>Dashboard</a></li>
                <li><a href='departments.php'>Departments</a></li>
                <li><a href='employees.php'>Employees</a></li>
                <li><a href='leaves.php'>Leaves</a></li>
                <li><a href='inventory.php'>Inventory</a></li>
                <li><a href='#' class="active">Repository</a></li>
                <li><a href='logout.php' class="sign-out">Sign-out</a></li>
            </ul>
        </nav>
        </header>
   
    <div class="row" style="padding-top: 71px">
        <div class="col-2" style="background: rgb(18, 18, 37)">
        <h6 style="background-color:rgb(24, 24, 49);font-weight:bold;padding:12px;color:#bebebe;box-shadow:5px 5px 5px #000" class="text-center">HEADQUARTERS</h6>
              <ul class="dashboard-links">
                <li><a href='headquarters.php'><img src="img/nralogo.svg" alt=""  id="btn-icon" style="font-weight:bold;color:#bebebe"> Dashboard</a></li>
                <li><a href='departments.php'><img src="img/deptm.png" alt="" id="btn-icon"> Departments</a></li>
                <li><a href='employees.php'><img src="img/staf.png" alt="" id="btn-icon"> Employees</a></li>
                <li><a href='leaves.php'><img src="img/leave.png" alt="" id="btn-icon"> Leaves</a></li><br><br>
                <p style="color:#505050;font-weight:bold;font-size:13px">EXTRA SERVICES</p>
                <li><a href='inventory.php'><img src="img/inv.png" alt="" id="btn-icon"> Inventory</a></li>
                <li><a href='repository.php' id="act-link"><img src="img/repo.png" alt="" id="btn-icon"> Repository</a></li>
                <p style="color:#909090;font-size:12px;padding-top:80px;padding-right:20px;border-top:1px solid #404040" class="text-center">&copy National Revenue Authority <br>Republic of South Sudan<br>Headquarters - Juba</p>
            </div>
      <div class="col-md-10 nra-title-excel">
      <div class="row">
                <h6 style="color: #909090;font-weight:bold;padding:12px;background:#f9f9f9;box-shadow:5px 5px 5px #d9d9d9">Repository</h6>
            </div>
                <form action="" method="POST">
                  <div class="col-md-4" style="float: right; margin-top:10px">
                    <input type="text" name="search" class="form-control" placeholder="Search file by name" style="font-size:13px;border-radius:50px">
                  </div>
                  <div class="col-md-4"  style="float: right">
                  </div>
                </form>

                <div class="container">
                    <div class="row" style="margin-top:10px">
                        <div class="col-10">
                        <form action="repository.php" method="post" enctype="multipart/form-data" class="upload-link">
                        <label for="">Upload File</label>
                        <input type="file" name="myfile" placeholder="File Name">
                        <input type="submit" name="submit" class="sub-btn" value="Save" style="margin-right:57px">
                        </form>
                        </div>
                    </div>
                </div>

<table class="table table-striped">
  <thead>
    <tr style="font-size:13px">
      <th>S/No.</th>
      <th>File-Name</th>
      <th>Size</th>
      <th>Downloads</th>
      <th>Date & Time</th>
      <th>Save-File</th>
      <th>Delete</th>
    </tr>
  </thead>
<tbody>
   
  <?php foreach($files as $file): ?>

    <tr style="font-size:13px">
      <td><?php echo $file['id'];?></td>
      <td><?php echo $file['name'];?></td>
      <td><?php echo $file['size'] / 1000 . "KB";?></td>
      <td><?php echo $file['downloads'];?></td>
      <td><?php echo $file['date-time'];?></td>
      <td><a href="repository.php?file_id=<?php echo $file['id']?>" class="action-link">Download</a></td>
      <td><a href="del-ex-1.php?deleteid=<?php echo $file['id'];?>" onclick="return confirm('Are you sure you want to delete the file?')" style="color: crimson" class="action-link">Delete</a></td>
    </tr>

    <?php endforeach ; ?>

    </tbody>
  </table>
</div>
</div>
</div>
</div>
   </body>
</html>