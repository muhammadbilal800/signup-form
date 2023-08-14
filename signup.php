<?php include_once('./api.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="signup.php" method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit" name="signup">Signup</button>
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