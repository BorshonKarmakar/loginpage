<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>
    
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
    <h2 class="login-header">Reset password</h2>
    <p class="p-2 bg-info text-center text-white">Your email has verified successfully</p>
    <p class="bg-secondary text-white px-5">
    <?php
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
        }else{
            echo $_SESSION['message']="";
        }
    ?>
    </p>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="newpassword" class="form-label">New Password</label>
            <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="New Password" required>
        </div>
        <div class="mb-3">
            <label for="rnewpassword" class="form-label">Re-type new password</label>
            <input type="password" class="form-control" id="rnewpassword" name="rnewpassword" placeholder="Re-type your new password" required>
        </div>
        <div class="d-grid">
            <input type="submit" name='submit' class="btn btn-custom btn-block button" value="Update Password">
        </div>
        <p class="text-center mt-2">Have an account?<a href="login.php">Log in</a></p>
    
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
include 'server.php';
if(isset($_POST['submit'])){
    if(isset($_GET['token'])){
        $token=$_GET['token'];
        $newpass=$_POST['newpassword'];
        $rpass=$_POST['rnewpassword'];
        if ($newpass === $rpass){
            $hashpass=password_hash($newpass, PASSWORD_BCRYPT);
            $select="update userlogin set password='$hashpass' where token='$token'";
            $query=mysqli_query($con,$select);
            if($query){
                $_SESSION['msg']="Password updated successfully, login now.";
                header('location:login.php');
            }else{
                $_SESSION['message']="Password update failed";
                header('locaton:updatepass.php');
            }
        }else{
            $_SESSION['message']="Password didn't match.";
            
        }
    }
}
?>
