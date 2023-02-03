<?php 
    include_once "DatabaseConnection.php";
    session_start();
    if(isset($_POST['Logout'])){
        session_destroy();
        unset($_SESSION['username']);
        unset($_SESSION['id']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Login</title>
</head>
<body>
    <div class="Logincard">
        <form method="POST" action="LoginCheck.php">
            <h1>Login</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 form-check">
                <select class="form-select" id="Choice" name="choice" required>
                    <option value="employee">Employee</option>
                    <option value="student">Student</option>
                    <option value="instructor">Instructor</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "login=empty") == true){
                        echo "<script>alert('You Did Not Fill All The Fields !')</script>";
                    }   
                    if (strpos($fullUrl, "login=validateEmail") == true){
                        echo "<script>alert('You Used An Invalid e-mail !')</script>";
                    }   
                    if (strpos($fullUrl, "login=successfull") == true){
                        
                    }   
                    if (strpos($fullUrl, "login=emailorpassword") == true){
                        echo "<script>alert('The Email Or The Password Or The Choice Is Incorrect !')</script>";
                    }   
            ?>
    </div>
    <script src="bootstrap.js"></script>
</body>
</html>