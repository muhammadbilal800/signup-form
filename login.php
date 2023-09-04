<?php include_once('./apis/api.php') ?>
<?php 
    if(isset($_SESSION['admin-panel-login'])){
        if($_SESSION['admin-panel-login'] == true){
            header('Location: admin.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<?php include('./components/navbar.php'); ?>
<div class="flex items-center justify-center h-screen bg-indigo-600">
    <div class="w-96 p-6 shadow-lg bg-white rounded-md" >
       <h1 class="text-center font-bold text-2xl" >Login Form</h1>
       <hr class="mt-3">
       <form class="mt-3" action="login.php" method="post" >
        <input class="w-full p-2 mb-3 border border-gray-600 focus:outline-none " type="email" name="email" placeholder="Email" required><br>
        <input class="w-full p-2 mb-3 border border-gray-600  focus:outline-none" type="password" name="password" placeholder="Password"required><br>
        <button class="w-full py-2 px-4 mt-2 bg-indigo-600 text-white font-semibold text-lg rounded-lg border hover:border-indigo-500 hover:bg-white hover:text-black " type="submit" name="login">Login</button>
       </form>
     
    </div>
</div>

   <?php include_once('./apis/errors.php'); ?>
     

</body>
</html>