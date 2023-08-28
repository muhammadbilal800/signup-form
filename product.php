<?php
    include_once('./apis/api.php');

    $slug = $_GET['product'];
    $sql = "SELECT * from products WHERE slug = '$slug'";
    $result = mysqli_query($con, $sql);
    $name = "";
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
    }else{
        header('Location: index.php');
    }

    if(isset($_SESSION['login-data'])){
        $name = $_SESSION['login-data']['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <?php include_once('./components/navbar.php'); ?>

    <section class="w-full">
        <div class="max-w-4xl m-auto py-12 px-4 grid grid-cols-2 gap-6">
            <div class="w-full">
                <img src="./assets/product_images/<?php echo $row['image']; ?>" class="w-full" alt="">
            </div>
            <div>
                <h1 class="text-3xl mb-3 font-semibold"><?php echo $row['name']; ?></h1>
                <h2 class="text-2xl mb-3 font-semibold">$<?php echo $row['price']; ?></h2>
            </div>
        </div>
    </section>
    <section class="w-full">
        <div class="max-w-3xl m-auto py-12 px-4 gap-6">
            <form action="product.php?product=<?php echo $row['slug']; ?>" method="post" class="bg-white p-6 rounded-xl">
                <input class="mb-3 p-2 px-3 w-full bg-gray-100 rounded-md" type="hidden" name="product" value="<?php echo $row['id']; ?>">
                <input class="mb-3 p-2 px-3 w-full bg-gray-100 rounded-md" type="text" name="name" value="<?php echo $name; ?>" placeholder="Name">
                <textarea class="mb-3 p-2 px-3 w-full bg-gray-100 rounded-md" name="comment" id="" cols="30" rows="6" placeholder="Compose here..."></textarea>
                <button type="submit" class="bg-indigo-500 text-white py-2 px-6 rounded-md" name="commented">Post</button>
            </form>

            <?php 
                $sql = "SELECT products.*, comments.* FROM products LEFT JOIN comments ON products.id = comments.product_id WHERE products.id = " . $row['id'] . " ORDER BY comments.id DESC";
                ;

                // $sql = "SELECT * from comments WHERE product_id = ".$row['id'];
                $results = mysqli_query($con, $sql);
                if(mysqli_num_rows($results)){
                    while($rows = mysqli_fetch_assoc($results)){
                        $name = $rows['name'];
                        $comment = $rows['comment'];
                        $created = $rows['created_at'];
                        echo "
                            <div class='my-3 bg-gray-50 p-6 flex items-center justify-between rounded-lg shadow-sm'>
                               <div>
                                    <h3> $name</h3>
                                    <p>$comment</p>
                                </div>
                                <b>$created</b>
                            </div>
                        ";
                    }   
                }
            ?>
        </div>
    </section>
</body>
</html>