<?php 
error_reporting(0);
session_start();
include 'config.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 
    <link rel="stylesheet" type="text/css" href="dist/css/login.css">
 
    <title>LOGIN</title>
</head>
<body>
<div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
 
    <div class="container">
        <form action="login.php" method="POST" class="login-email"> 
            <center><img src="logo.png" width="160px" height="180px" alt=""></center>
            <p class="login-text" style="font-size: 15px;">Selamat Datang Di <br>Sistem Informasi Data Personel BID TIK POLDA KALTARA</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" <?php echo $username; ?> required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" <?php echo $_POST['password']; ?>  required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>