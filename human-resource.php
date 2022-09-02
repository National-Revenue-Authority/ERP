<?php

   include('layout.php');

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
                        <button class="dept-info3">Number of Staff<br>7</button>
                    </div>
                    <div class="col">
                        <button class="dept-info4">Head of Department Title<br>Assistant Commissioner for Human Resource</button>
                    </div>
                </div>
                
                <h5 style="padding:20px 0">Employee's Details</h5>

                <div class="card" style="width: 25rem;">
                    <img class="card-img-top" src="img/admin.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Employee Name: John Doe</p>
                        <p class="card-text">Title: Assistant Commissioner for Human Resource</p>
                        <p class="card-text">Email: nan@nra.gov.ss</p>
                        <p class="card-text">Tel: +211-923-222-333</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>