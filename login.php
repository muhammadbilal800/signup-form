<?php include_once('./api.php') ?>
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
    <ul>
        <?php
            if(count($errors) > 0){
                foreach($errors as $error){
                    echo "<li>$error</li>";
                }
            }
        ?>
    </ul>
</body>
</html>