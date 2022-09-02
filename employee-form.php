<?php

   include('layout.php');

?>

<div class="col-10">
    <div class="row">
        <div class="container">
            <div class="appointment-form">
                <div class="row" style="font-weight:bold;">
                    <h2 style="font-weight:bold;color:#707070">Employee Registration Form</h2>
                    <h5 style="font-weight:bold;padding-left:700px;color:#707070">F-SFT-007-E</h5>
                </div>
            
                <form action="connection/signup.inc.php" method="post">
                    <div class="row">
                        <h4 class="admin-header">1.a. Personal Details</h4>
                        <h6 class="" style="padding-bottom:20px">Please make sure you review the information entered below before submitting.</h6>

                        <div class="form-group col-6">
                            <label for="">Surname</label>
                            <input type="text" class="form-control" placeholder="Enter surname" name="fname"/>
                        </div>
                        <div class="form-group col-6">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" placeholder="Enter first name" name="lname"/>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Other Names (in full)</label>
                                    <input type="text" class="form-control" placeholder="Enter other names" name="lname"/>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Gender</label>
                            <select class="form-select" aria-label="">
                                <option selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-6 md-form md-outline input-with-post-icon datepicker">
                            <label for="example">Date of Birth</label>
                            <input placeholder="Select date" type="date" id="example" class="form-control" style="color:#707070">
                        </div>
                        <div class="form-group col-6">
                            <label for="">Marital Status</label>
                            <select class="form-select" aria-label="">
                                <option selected>Select Status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="separated">Separated</option>
                                <option value="widowed">Widowed</option>
                            </select>                  
                        </div>
                        <div class="form-group col-6">
                            <label for="">Postal Address</label>
                            <input type="text" class="form-control" placeholder="e.g. Munuki 107, Juba City" name="fname"/>
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
                            <select class="form-select" aria-label="">
                                <option selected>Select State</option>
                                <option value="central">Central Equatoria</option>
                                <option value="eastern">Eastern Equatoria</option>
                                <option value="western">Western Equatoria</option>
                                <option value="jonglei">Jonglei State</option>
                                <option value="lakes">Lakes State</option>
                                <option value="warap">Warap State</option>
                            </select>                  
                        </div>

                        <div class="form-group col-6">
                            <label for="">Domicile/Place of Origin</label>
                            <select class="form-select" aria-label="">
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
                            <input type="text" class="form-control" placeholder="Payroll number" name="email"/>
                        </div>

                        <h4 class="admin-header">b. Spouse Details</h4>
                        <div class="form-group col-6">
                            <label for="">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter full name" name="lname"/>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Postal Address</label>
                            <input type="text" class="form-control" placeholder="e.g. Munuki 107, Juba City" name="fname"/>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Tel. No.</label>
                            <input type="text" class="form-control" placeholder="9xxxxxxxx" name="phone"/>
                        </div>
                        <div class="form-group col-6">
                            <label for="">Email</label>
                            <input type="text" class="form-control" placeholder="you@gmail.com" name="email"/>
                        </div>
                    </div>
                    <input type="submit" class="verify-btn" name="submit" value="Submit"/>
                    <p class="privacy-policy">By Submitting Account, you accepted NRA <a href="">Terms of Use</a></p>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php' ?>