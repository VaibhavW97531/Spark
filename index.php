<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spark</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./login.js" defer></script>
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon.ico">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script><link rel="stylesheet" href="./style.css">
</head>
<body>
    <section>
        <form method="post" action="index.php">
            <h1 class="glow">Spark</h1>
            <div class="inputbox">
                <ion-icon name="person-outline"></ion-icon>
                <input type="text" name="username" required>
                <label for="">Username</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password" required>
                <label for="">Password</label>
            </div>
            <button name="login_Btn">Login</button>
            <div class="register">
                <p>Don't have an account?  <br><a href="#">Sign Up</a></p>
            </div>
        </form>
    </section>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM websitelogin.logindetails WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);
    if($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:Website/index.html');
        }else{
            echo "<script>
               alert('Invalid credentials');
             </script>";
        }
    }else{
            echo "<script>
               alert('Invalid credentials');
             </script>";
        }
}
?>
