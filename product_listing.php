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
    <link rel="stylesheet" href="./assets/css/app.css">
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body>

    <h1>Welcome, <?php echo $data['name']; ?> 👋</h1>
    <form action="product_listing.php" method="post">
        <button type="submit" name="logout" value="true">Logout</button>
    </form><br><br>
    <form action="product_listing.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Name">
        <input type="number" name="price" step="0.01" placeholder="Price">
        <input type="file" name="image" accept="image/*">
        <button type="submit" name="add_product">Submit</button>
    </form>
    <form action="index.php" method="get">
        <input type="search" name="search" placeholder="Search by name...">
        <button type="submit">Search</button>
    </form>
    <div class="w-full max-w-5xl m-auto">
        <table class="w-full">
            <tr>
                <th class="text-start" >Image</th>
                <th class="text-start" >Name</th>
                <th class="text-start" >Price</th>
                <th class="text-start" >Slug</th>
                <th class="text-end" >Created</th>
                <th class="text-end" >Updated</th>
                <th class="text-end" >Delete</th>
            </tr>
            <?php 
                if(isset($_GET['search'])){
                    $search = $_GET['search'];
                    $sql = "SELECT * from products WHERE name LIKE '%$search%'";
                }else{
                    $sql = "SELECT * from products ";
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
                        
                        <td class='text-start'><img src='./assets/product_images/$image' width='50px'></td>
                        <td class='text-start'>$name</td>
                        <td class='text-start'>$$price</td>
                        <td class='text-start'>$slug</td>
                        <td class='text-end'>$created</td>
                        <td class='text-end'>$updated</td>
                        
                         <td class='text-end relative' x-data='{ open: false }' >
                         <span  @click='open = !open' class='py-2 px-4 rounded-lg cursor-pointer bg-red-600 text-white inline-block' >Delete</span> 
                        <form action='product_listing.php' method='post' x-show='open' x-cloak x-transition class='absolute right-0 top-8 -translate-x-6 rounded-lg bg-white p-3 z-10 w-[300px] shadow-lg' >
                        <span>Are you sure you want to delete?</span>
                        <input type='hidden' value='$id' name='id'>
                        <button type='submit' name='delete' class='w-full py-2 px-4 bg-indigo-600 mt-2 rounded-lg text-white' >Confirm</button>
                    </form></td>
                        </tr>";
                    }
                }else{
                    echo "No Data exist in database";
                }
            ?>
        </table>
    </div>
</body>
</html>