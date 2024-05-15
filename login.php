<?php 
 include("service/database.php");
 if(isset($_POST["login"])) {
    // echo "tes login";
    $username = $_POST ["username"];
    $password = $_POST ["password"];
    
   $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
   $result = $db->query($sql);
   if($result->num_rows > 0) {
    echo"datanya ada";
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
    <?php include "layout/header.html" ?>
    <h3>Login Page</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name=login>Masuk Akun</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>
</html>