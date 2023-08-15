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
</head>
<body>
    <form action="login.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
    <?php include_once('./apis/errors.php'); ?>
</body>
</html>