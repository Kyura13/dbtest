<?php 
    include "service/database.php";

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND PASSWORD='$password'";

        $result = $db->query($sql);

        if($result-> num_rows > 0){
            echo "data ditemukan";
        }else{
            echo "data tidak ada";
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
    <?php include "layout/header.html" ?>

    <h3>Masuk Akun</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password" />
        <button type="submit" name="login">Masuk</button>
    </form>
    
    <?php include "layout/footer.html" ?>
</body>
</html>