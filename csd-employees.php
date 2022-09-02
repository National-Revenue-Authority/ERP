<?php

   include('layout.php');

?>

<div class="col-10">
    <div class="row">
        <div class="col-12 mb-3">

            <form action="" method="POST">
                <div class="col-md-4" style="float: right; margin-top:10px">
                    <input type="text" name="search" class="form-control" placeholder="Search employee by name" style="font-size:13px;border-radius:50px">
                </div>
            </form>
            
            <a href="employee-form.php"><button style="padding:5px 50px;border:none;background:rgb(24, 133, 184);border-radius:3px;color:#fff;margin:10px 90px">Add</button></a>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px;border-right:2px solid #bebebe">
                    <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                    <h6 style="font-size:12px;padding-top:10px">Jane Doe</h6>
                    <p>IT Officer<br><span style="border-left:5px solid orange;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> jane@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229<a href="#" style="float:right;padding-right:25px">Profile</a></p>
                </div>

                <div class="col-6" style="background:#fff;box-shadow: 5px 5px 5px #d9d9d9;font-size:13px;margin-bottom:5px;border-right:2px solid #bebebe">
                    <img src="img/bg.svg" alt="" style="height:100px;width:100px;float:left;border-radius:5px;margin-top:8px;margin-right:10px;margin-left:40px">
                    <h6 style="font-size:12px;padding-top:10px">Jane Doe</h6>
                    <p>IT Officer<br><span style="border-left:5px solid orange;padding-left:10px">Department ICT, Division Headquarters</span><br><img src="img/email.png" alt="" style="width:20px;height:20px"> jane@gmail.com<br><img src="img/phones.png" alt="" style="width:20px;height:20px"> +211 (0) 9211 292 229<a href="#" style="float:right;padding-right:25px">Profile</a></p>
                </div>
            </div>

        </div>
        <div style="text-align:center;font-size:14px;color:#666666;margin:20px 0">
            <a href=""><img src="img/backward.png" alt="" style="height:20px"></a>1 / 25<a href=""><img src="img/forward.png" alt="" style="height:20px"></a>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>