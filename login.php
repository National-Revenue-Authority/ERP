<?php

    error_reporting(0);
    session_start();
    
?>

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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800;900&display=swap" rel="stylesheet">
        <title>National Revenue Authority</title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css?v=<?php echo time();?>">
    </head>
    <body>
        <div class="col-12">

            <div class="container">
                <div class="row main">
                    <div class="col-md-8 parent">
                        <center><img src="assets/img/nralogo.svg" class="signin-logo" alt=""></center>
                        <h3 class="font-weight-bold text-muted text-center pb-3 pt-2">National Revenue Authority</h1>
                        <p class="text-center">To sign in, please select and enter your credentials</p>

                        <form action="includes/login.inc.php" method="POST">
                            <div class="form-input">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-input">
                                <label for="passcode">Passcode</label>
                                <input type="password" name="passcode" class="form-control" placeholder="Enter Division Code">
                            </div>
                            <div class="form-input">
                                <label for="">Division</label>
                                <select class="form-select" name="division" id="division">
                                    <option value="">Select Division</option>
                                    <option value="customs">Customs</option>
                                    <option value="corporate_service">Corporate Service</option>
                                    <option value="domestic_tax">Domestic Tax</option>
                                    <option value="internal_audit">Internal Audit</option>
                                    <option value="internal_affairs">Internal Affairs</option>
                                </select>
                            </div>
                            <input type="submit" class="verify-btn" name="submit" value="Sign in"/>
                        </form>

                        <!-- <button class="act" data-bs-toggle="modal" data-bs-target="#csd"> Corporate Service</button>
                        
                        <button class="act" data-bs-toggle="modal" data-bs-target="#css" > Customs</button>
                        
                        <button class="act" data-bs-toggle="modal" data-bs-target="#dtrd"> Domestic Tax</button>

                        <button class="act" data-bs-toggle="modal" data-bs-target="#audit" > Internal Audit</button>
                        
                        <button class="act" data-bs-toggle="modal" data-bs-target="#affairs"> Internal Affairs</button> -->

                        <p class="privacy-policy pt-4 text-center">By signing in, you agree to NRA system <a href="">Terms of Use</a></p>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="csd" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title text-dark" id="enquireLabel">Enter username and division code to gain access.</p>
                            <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="connection/csd.inc.php" method="post">
                                <input type="text" name="div_name" class="form-control" placeholder="Username"><br>
                                <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
                                <input type="submit" class="verify-btn" name="submit" value="Sign in"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="css" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title text-dark" id="enquireLabel">Enter division name and code to gain access.</p>
                            <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="connection/css.inc.php" method="post">
                                <input type="text" name="div_name" class="form-control" placeholder="Division Name"><br>
                                <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
                                <input type="submit" class="verify-btn" name="submit" value="Sign in"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="dtrd" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title text-dark" id="enquireLabel">Enter division name and code to gain access.</p>
                            <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="connection/dtrd.inc.php" method="post">
                                <input type="text" name="div_name" class="form-control" placeholder="Division Name"><br>
                                <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
                                    <input type="submit" class="verify-btn" name="submit" value="Sign in"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="audit" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title text-dark" id="enquireLabel">Enter division name and code to gain access.</p>
                            <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="connection/css.inc.php" method="post">
                                <input type="text" name="div_name" class="form-control" placeholder="Division Name"><br>
                                <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
                                    <input type="submit" class="verify-btn" name="submit" value="Sign in"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="affairs" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title text-dark" id="enquireLabel">Enter division name and code to gain access.</p>
                            <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="connection/css.inc.php" method="post">
                                <input type="text" name="div_name" class="form-control" placeholder="Division Name"><br>
                                <input type="password" name="div_code" class="form-control" placeholder="Enter Division Code"><br>
                                    <input type="submit" class="verify-btn" name="submit" value="Sign in"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
			
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</html>
