<?php include_once('./api.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="class" placeholder="Class">
        <input type="number" name="roll" placeholder="Roll Number">
        <button type="submit" name="add_student">Submit</button>
    </form>
    <form action="index.php" method="get">
        <input type="search" name="search" placeholder="Search by name...">
        <button type="submit">Search</button>
    </form>
    <ul>
        <?php 
            if(isset($_GET['search'])){
                $search = $_GET['search'];
                $sql = "SELECT * from classes WHERE name LIKE '%$search%'";
            }else{
                $sql = "SELECT * from classes";
            }
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $name = $row['name'];
                    $class = $row['class'];
                    $roll = $row['roll_number'];
                    echo "<li>$name - $class - $roll</li>";
                }
            }else{
                echo "No Data exist in database";
            }
        ?>
    </ul>
</body>
</html>