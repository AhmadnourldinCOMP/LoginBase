<?php 
    include_once "DatabaseConnection.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Employee</title>
</head>
<body>
    <div class="employee_main">
        <form action="index.php" method="POST" class="Logout">
            <button class="btn btn-danger" type="submit" name="Logout">Logout</button>
        </form>
    </div>
    <script src="bootstrap.js"></script>
</body>
</html>