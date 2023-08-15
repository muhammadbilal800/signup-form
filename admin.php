<?php include('./apis/api.php'); ?>
<?php 
    if($_SESSION['admin-panel-login'] != true){
        header('Location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="admin.php" method="post">
        <button type="submit" name="logout" value="true">Logout</button>
    </form><br><br>
    <form action="admin.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="price" step="0.01" placeholder="Price">
        <button type="submit" name="add_product">Submit</button>
    </form>
    <form action="index.php" method="get">
        <input type="search" name="search" placeholder="Search by name...">
        <button type="submit">Search</button>
    </form>
    <ul>
        <?php 
            if(isset($_GET['search'])){
                $search = $_GET['search'];
                $sql = "SELECT * from products WHERE name LIKE '%$search%'";
            }else{
                $sql = "SELECT * from products";
            }
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $price = number_format($row['price'], 2);
                    echo "<li>$name - $$price
                    
                    <form action='admin.php' method='post'>
                        <input type='hidden' value='$id' name='id'>
                        <button type='submit' name='delete'>X</button>
                    </form>
                    
                    </li>";
                }
            }else{
                echo "No Data exist in database";
            }
        ?>
    </ul>
</body>
</html>