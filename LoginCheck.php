<?php
    if(isset($_POST['submit'])){
        include_once "DatabaseConnection.php";

        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $choice = mysqli_real_escape_string($conn,$_POST['choice']);

        if(empty($email) || empty($password) || empty($choice)){
            header("Location: index.php?login=empty");
            exit();
        }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: index.php?login=validateEmail");
                exit();
            }else{
                $sql = "SELECT * FROM $choice WHERE email = '$email' && password = '$password';";
                $result = mysqli_query($conn, $sql);
                $resultNumber = mysqli_num_rows($result);
                if($resultNumber > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        session_start();
                        $_SESSION['username'] = $row['name'];
                        $_SESSION['id'] = $row['id'];
                    }
                    header("Location: student.php?");
                }else{
                    header("Location: index.php?login=emailorpassword");
                }
            }
        }
    }else{
        header("Location: index.php?login=error");
        exit();
    }


?>