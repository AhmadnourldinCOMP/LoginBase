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
      <th scope="col">Joinning</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr>
  </tbody>
        </table>
    </div>
    <script src="bootstrap.js"></script>
</body>
</html>