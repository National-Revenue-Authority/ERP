<?php

    // session_start();
    
    include_once "config.php";
    
    if (isset($_GET['q']))  {
        if ($_GET['q'] == 'sessionexpired') {
            echo("
                <div class='alert alert-warning'>
                    <h3>Login to continue</h3>
                    <a href='../login'> Login </a>
                </div>
            ");
        }
    }


    if (isset($_POST['submit'])) {
	    
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['passcode']);
        $division = mysqli_real_escape_string($conn, $_POST['division']);
    
        //Error handling
        //checking if inputs are empty
    
        if (empty($username) || empty($password)) {
            header("Location: ../login.php?login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if ($resultCheck < 1) {
                header("Location: ../login.php?login=error");
                exit();
            } else {
                if ($row = mysqli_fetch_assoc($result)) {
                    //de-hashing the password
    
                    $hashedPwdCheck = password_verify($password, $row['passcode']);
                    if ($hashedPwdCheck == false) {
                        header("Location: ../login.php?login=mismatch");
                        exit();
                    } elseif ($hashedPwdCheck == true) {
                        //login the user

                        setcookie("username", base64_encode($username), time()+3600, "/", "", 0);
                        setcookie("division", base64_encode($division), time()+3600, "/", "", 0);
    
                        header("Location: ../index.php?division={$division}");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../login.php");
        exit();
    }
    
