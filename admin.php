<?php include('./apis/api.php'); ?>
<?php 
    if($_SESSION['admin-panel-login'] != true){
        header('Location: login.php');
    }else{
        $data = $_SESSION['login-data'];
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

    <h1>Welcome, <?php echo $data['name']; ?> 👋</h1>
    <form action="admin.php" method="post">
        <button type="submit" name="logout" value="true">Logout</button>
    </form><br><br>
    <form action="admin.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="price" step="0.01" placeholder="Price">
        <input type="file" name="image" accept="image/*">
        <button type="submit" name="add_product">Submit</button>
    </form>
    <form action="index.php" method="get">
        <input type="search" name="search" placeholder="Search by name...">
        <button type="submit">Search</button>
    </form>
    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Slug</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Delete</th>
        </tr>
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
                    $image = $row['image'];
                    $slug = $row['slug'];
                    $created = $row['created_at'];
                    $updated = $row['updated_at'];
                    $price = number_format($row['price'], 2);
                    echo "<tr>
                    
                    <td><img src='./assets/product_images/$image' width='50px'></td>
                    <td>$name</td>
                    <td>$price</td>
                    <td>$slug</td>
                    <td>$created</td>
                    <td>$updated</td>
                    
                    <td><form action='admin.php' method='post'>
                    <input type='hidden' value='$id' name='id'>
                    <button type='submit' name='delete'>X</button>
                </form></td>
                    </tr>";
                }
            }else{
                echo "No Data exist in database";
            }
        ?>
    </table>
</body>
</html>