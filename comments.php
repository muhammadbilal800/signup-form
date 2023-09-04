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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/app.css">
    <script src="https://unpkg.com/alpinejs" defer></script>
  
</head>
<body>
    <?php include('./components/com_nav.php'); ?>
    <h1>Welcome, <?php echo $data['name']; ?> 👋</h1>
    <div class="w-full max-w-4xl m-auto">
        <table class="w-full">
            <tr>
                <th class="text-start">Name</th>
                <th class="text-start">Comment</th>
                <th class="text-end">Created</th>
                <th class="text-end">Delete</th>
            </tr>
            <?php 
               $sql = "SELECT * from comments";
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $comment = $row['comment'];
                        $created = $row['created_at'];
                        echo "<tr>
                        <td class='text-start'>$name</td>
                        <td class='text-start'>$comment</td>
                        <td class='text-end'>$created</td>
                        
                        <td class='text-end relative' x-data='{ open: false }'>
                        <span @click='open = !open' class='py-2 inline-block cursor-pointer px-4 bg-red-600 text-white rounded-lg'>Delete</span>
                        <form action='comments.php' method='post' x-show='open' x-cloak x-transition class='absolute right-0 top-8 -translate-x-6 rounded-lg bg-white p-3 z-10 w-[300px] shadow-lg'>
                           <span>Are you sure you want to delete?</span>
                           <input type='hidden' value='$id' name='id'>
                           <button type='submit' name='delete' class='w-full py-2 px-4 bg-indigo-600 mt-2 rounded-lg text-white'>Confirm</button>
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



