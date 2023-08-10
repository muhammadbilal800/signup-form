<?php
    include('./connection.php');
    date_default_timezone_set("Asia/Karachi");

    if(isset($_POST['add_student'])){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $roll = $_POST['roll'];

        $date = date('d/m/y H:i:s A');

        $sql = "INSERT INTO classes (name, class, roll_number, created_at, updated_at) VALUES ('$name', '$class', $roll, '$date', '$date')";

        $result = mysqli_query($con, $sql);
        if($result){
            echo "Data has been inserted!";
        }else{
            echo "There is an error with the query!";
        }
    }

    // Signup API
    if(isset($_POST['signup'])){

        // Prevent MySQL Injection
        $name = htmlspecialchars(mysqli_real_escape_string($con, $_POST['name']));
        $email = htmlspecialchars(mysqli_real_escape_string($con, $_POST['email']));
        $password = htmlspecialchars(mysqli_real_escape_string($con, $_POST['password']));
        $confirm = htmlspecialchars(mysqli_real_escape_string($con, $_POST['confirm_password']));

        $password_encrypted = sha1(sha1(sha1($password)));
        $date = date('d/m/y H:i:s A');

        if($password === $confirm){
            $select = "SELECT * from users WHERE email = '$email'";
            $sql_result = mysqli_query($con, $select);
            if(mysqli_num_rows($sql_result) == 0){
                $sql = "INSERT into users (name, email, password, created_at, updated_at) VALUES ('$name', '$email', '$password_encrypted', '$date', '$date')";
                $result = mysqli_query($con, $sql);
                if($result){
                    echo "Signup Success!";
                }
            }else{
                echo "User already exist!";
            }
        }else{
            echo "Password and Confirm password does not match!";
        }
    }
?>