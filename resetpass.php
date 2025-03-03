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
    <h2 class="login-header">Reset password</h2>
    <p class="p-2 bg-info text-center text-white">You can reset your password by verifying your email</p>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="resetemail" placeholder="Enter your email" required>
        </div>
       
        <div class="d-grid">
            <input type="submit" name='submit' class="btn btn-custom btn-block button" value="Verify email">
        </div>
    
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<?php
include 'server.php';
if(isset($_POST['submit'])){
    $resetemail=$_POST['resetemail'];
    $reset_email_found="select *from userlogin where email='$resetemail'";
    $resemailcon=mysqli_query($con, $reset_email_found);
    if(mysqli_num_rows($resemailcon)){
        $res_email_assoc=mysqli_fetch_assoc($resemailcon);
        $db_email=$res_email_assoc['email'];
        $user_name=$res_email_assoc['name'];
        $user_token=$res_email_assoc['token'];
        if($resetemail === $db_email){
            $email_subject="Reset password";
            $email_message="Hi $user_name! click here for reset your password http://localhost/Php/Web%20development%20project/updatepass.php?token=$user_token";
            if(mail($resetemail,$email_subject, $email_message,"From: borshon.k.2004@gmail.com")){
                ?>
                <script>
                    alert('Successfully verify your email, please check your email for reset password');
                </script>
                <?php
            }
        }
    }else{
        ?>
            <script>
                alert("Email couldn't found");
            </script>
        <?php
    }
}
?>
