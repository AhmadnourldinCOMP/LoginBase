<?php
    include_once "DatabaseConnection.php";
    session_start();
    $sql = "DELETE FROM student WHERE id = ".$_GET['id'].";";
    $result = mysqli_query($conn, $sql);
    header("Location: instructor.php");
?>