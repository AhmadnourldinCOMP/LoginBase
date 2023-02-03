<?php 
    include_once "DatabaseConnection.php";
    $StudentId = $_GET["stid"];
    $InstructorId = $_GET["inid"];

    $sql = "SELECT * FROM course WHERE instructor_id = ".$InstructorId.";";
    $result = mysqli_query($conn, $sql);
    $ResultNum = mysqli_num_rows($result);
    if ($ResultNum > 30){
        header("Location: student.php?error=FullClass");
    }else{
        $sql = "SELECT * FROM course WHERE instructor_id = ".$InstructorId." && student_id = ".$StudentId.";";
        $result = mysqli_query($conn, $sql);
        $ResultNum = mysqli_num_rows($result);
        if($ResultNum == 1){
            $sql = "DELETE FROM course WHERE instructor_id = ".$InstructorId." && student_id = ".$StudentId.";";
            $result = mysqli_query($conn, $sql);
            header("Location: student.php?error=ss");
        }else{
            $sql = "INSERT INTO course VALUES(null, ".$InstructorId.", ".$StudentId.");";
            $result = mysqli_query($conn, $sql);
            header("Location: student.php?error=success");
        }
    }
?>