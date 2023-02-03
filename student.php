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
    <title>Student</title>
</head>
<body>
    <div class="Student_main">
        <form action="index.php" method="POST" class="Logout">
            <button class="btn btn-danger" type="submit" name="Logout">Logout</button>
        </form>
        <h1>Welcome: <?php echo $_SESSION['username'];?></h1>
        <table class="table table-bordered">
        <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "SELECT * FROM instructor;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<th>".$row['name']."</th>";
            $sql = "SELECT * FROM course WHERE instructor_id = ".$row['id'] ." && student_id = ".$_SESSION['id'].";";
            $result = mysqli_query($conn, $sql);
            $resultNum = mysqli_num_rows($result);
            if($resultNum > 0){
                echo "<th><buttton class='btn btn-danger'><a class=ButtonText href='instractorCheck.php?stid=".$_SESSION['id']."&inid=".$row['id']."&status=out'>Out</a></button></th>";
            }else{
                echo "<th><buttton class='btn btn-success'><a class=ButtonText href='instractorCheck.php?stid=".$_SESSION['id']."&inid=".$row['id']."&status=in'>In</a></button></th>";
            } 
            echo "</tr>";
        }
    ?>
  </tbody>
        </table>
    </div>
    <script src="bootstrap.js"></script>
</body>
</html>