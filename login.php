<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2 class="login-header">Login</h2>
    <p class="p-2 bg-info text-center text-white"><?php 
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }else{
        echo $_SESSION['msg']="You are logged out.";
    }
    ?></p>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php if(isset($_COOKIE['emailcookie'])){echo $_COOKIE['emailcookie'];} ?>" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" value="<?php if(isset($_COOKIE['passcookie'])){echo $_COOKIE['passcookie'];} ?>" required>
        </div>
        <div class="mb-3">
            <input type="checkbox" name="checkbox">Remember me
        </div>
        <div class="d-grid">
            <input type="submit" name='submit' class="btn btn-custom btn-block button" value="Login">
        </div>
        <p class="text-center mt-3">Forgot your password? Click here for <a href="resetpass.php">reset password</a></p>
        <p class="text-center mt-3">Don't have an account? <a href="register.php">Sign up</a></p>
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php 
include 'server.php';
if(isset($_POST['submit'])){
    $login_email=$_POST['email'];
    $login_password=$_POST['password'];
    $email_check_db="select * from userlogin where email='$login_email' and status='active'";
    $query=mysqli_query($con,$email_check_db);
    if (mysqli_num_rows($query)){
        $assoc=mysqli_fetch_assoc($query);
        $table_password=$assoc['password'];
        $name_connect=$assoc['name'];
        if(password_verify($login_password,$table_password)){
            $_SESSION['userlogin']="You are logged as $name_connect";
           header("Location: e-commerfce.php");
        }else{
            ?>
            <script>
                alert("Wrong password");
            </script>
            <?php
        }
    }else{
        ?>
        <script>
            alert("Invalid email");
        </script>
         <?php
    }
}
if(isset($_POST['checkbox'])){
    setcookie("emailcookie", $login_email, time()+86400);
    setcookie('passcookie', $login_password, time()+86400);
}
?>
