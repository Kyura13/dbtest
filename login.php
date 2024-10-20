<?php 
    include "service/database.php";

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND PASSWORD='$password'";

        $result = $db->query($sql);

        // Validasi Data (Komparasi data dengan yang ada di database)
        if($result-> num_rows > 0){
            $data = $result->fetch_assoc();

            // echo "data username adalah: " . $data["username"];
            // echo "data password adalah: " . $data["password"];

            // Go to 
            header("location: dashboard.php");
        }else{
            echo "data tidak ditemukan";
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