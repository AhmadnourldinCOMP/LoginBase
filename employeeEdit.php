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
    <div class="Logincard">
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_GET['name'];?>" required>
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">Salary</label>
                <input type="number" class="form-control" id="salary" name="salary" value="<?php echo $_GET['salary'];?>" required>
            </div>
            <div class="mb-3">
                <label for="dept_name" class="form-label">Course</label>
                <input type="text" class="form-control" id="dept_name" name="dept_name" value="<?php echo $_GET['dept_name'];?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $_GET['phone'];?>" required>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="text" class="form-control" id="start_date" name="start_date" value="<?php echo $_GET['start_date'];?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo $_GET['address'];?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $_GET['email'];?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $_GET['password'];?>" required>
            </div>
            <button type="submit" name="submitEdit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php
        if(isset($_POST['submitEdit'])){
            $sql = "UPDATE instructor set name='".$_POST['name']."', salary=".$_POST['salary'].", dept_name='".$_POST['dept_name']."', start_date='".$_POST['start_date']."' ,address='".$_POST['address']."', email='".$_POST['email']."', password='".$_POST['password']."' , phone='".$_POST['phone']."';";
            $result = mysqli_query($conn, $sql);
            header("Location: employee.php");
        }
    ?>
    <script src="bootstrap.js"></script>
</body>
</html>