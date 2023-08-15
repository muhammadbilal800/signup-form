<?php
    require 'connection.php';
    date_default_timezone_set("Asia/Karachi");
    session_start();
    $errors = [];

    function sqlCheck($con, $field){
        return htmlspecialchars(mysqli_real_escape_string($con, $field));
    }

    if(isset($_POST['add_product'])){
        $name = sqlCheck($con, $_POST['name']);
        $price = sqlCheck($con, $_POST['price']);

        if(!$name){
            array_push($errors, "Name field is required");
        }
        if(!$price){
            array_push($errors, "Price field is required");
        }
        $date = date('d/m/y H:i:s A');

        if(count($errors) == 0){
            $sql = "INSERT INTO products (name, price, created_at, updated_at) VALUES ('$name', $price, '$date', '$date')";

            $result = mysqli_query($con, $sql);
            if($result){
                echo "Product has been inserted!";
            }else{
                echo "There is an error with the query!";
            }
        }
    }

    
    // Signup API
    if(isset($_POST['signup'])){

        // Prevent MySQL Injection
        $name = sqlCheck($con, $_POST['name']);
        $email = sqlCheck($con, $_POST['email']);
        $password = sqlCheck($con, $_POST['password']);
        $confirm = sqlCheck($con, $_POST['confirm_password']);
        if(!$name){
            array_push($errors, "Name field is required");
        }elseif(strlen($name) > 255){
            array_push($errors, "Name must not be greater than 255");
        }
        if(!$email){
            array_push($errors, "Email field is required");
        }elseif(strlen($email) > 255){
            array_push($errors, "Email must not be greater than 255");
        }
        if(!$password){
            array_push($errors, "Password field is required");
        }elseif(strlen($password) > 255){
            array_push($errors, "Password must not be greater than 255");
        }
        if(!$confirm){
            array_push($errors, "Confirm Password field is required");
        }elseif(strlen($confirm) > 255){
            array_push($errors, "Confirm Password must not be greater than 255");
        }
        if($password !== $confirm){
            array_push($errors, "Passwords does not match");
        }
        if(strlen($password) < 8){
            array_push($errors, "Password must have 8 Characters");
        }

        $password_encrypted = sha1(sha1(sha1($password)));
        $date = date('d/m/y H:i:s A');

        if(count($errors) == 0){
            $select = "SELECT * from users WHERE email = '$email'";
            $sql_result = mysqli_query($con, $select);
            if(mysqli_num_rows($sql_result) == 0){
                $sql = "INSERT into users (name, email, password, created_at, updated_at) VALUES ('$name', '$email', '$password_encrypted', '$date', '$date')";
                $result = mysqli_query($con, $sql);
                if($result){
                    // echo "Signup Success!";
                    header('Location: login.php');
                }
            }else{
                array_push($errors, "User already exist");
            }
        }
    }

    // Login API
    if(isset($_POST['login'])){
        $email = sqlCheck($con, $_POST['email']);
        $password = sqlCheck($con, $_POST['password']);

        if(!$email){
            array_push($errors, "Email field is required");
        }
        if(!$password){
            array_push($errors, "Password field is required");
        }

        $password_encrypted = sha1(sha1(sha1($password)));
        if(count($errors) == 0){
            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password_encrypted'";
            $result = mysqli_query($con, $sql);
            
            if(mysqli_num_rows($result) == 1){
                // echo "Login Success";
                $_SESSION['admin-panel-login'] = true;
                header('Location: admin.php');
            }else{
                array_push($errors, "Email and password does not match!");
            }
        }
    }

    // Logout
    if(isset($_POST['logout'])){
        unset($_SESSION['admin-panel-login']);
        header('Location: login.php');
    }


    // Delete
    if(isset($_POST['delete'])){
        $id = sqlCheck($con, $_POST['id']);
        if(!$id){
            array_push($errors, "There is something wrong!");
        }

        if(count($errors) == 0){
            $sql = "DELETE from products WHERE id = '$id'";
            $result = mysqli_query($con, $sql);
            if($result){
                echo "Product has been deleted!";
            }
        }
    }
?>