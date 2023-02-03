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
    <title>instructor</title>
</head>
<body>
    <div class="employee_main">
        <form action="index.php" method="POST" class="Logout">
            <button class="btn btn-danger" type="submit" name="Logout">Logout</button>
        </form>
        <h1>Welcome: <?php echo $_SESSION['username'];?></h1>
        <form action="instructorAdd.php" method="POST" class="Logout">
            <button class="btn btn-info" type="submit" name="add">ADD</button>
        </form> 
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM student;";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<th>".$row["name"]."</th>";
                        echo "<th>".$row["phone"]."</th>";
                        echo "<th>".$row["email"]."</th>";
                        echo "<th>".$row["address"]."</th>";
                        echo "<th>".$row["password"]."</th>";
                        echo "<th>
                        <button class='btn btn-info'><a class='ButtonText' 
                        href='instructorEdit.php?id=".$row["id"]."&name=".$row['name']."&phone=".$row['phone']."&email=".$row['email']."&address=".$row['address']."&password=".$row['password']."'
                        >Edit</a></button>
                        <button class='btn btn-danger'><a class='ButtonText' 
                        href='instructorDelete.php?id=".$row["id"]."'
                        >Delete</a></button>
                        </th>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="bootstrap.js"></script>
</body>
</html>