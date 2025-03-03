<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container{
            width:50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .container form input{
            margin-top:15px;
        }
        .register{
            font-family: cursive;
            font-size:25px;
        }
        .submit{
            padding: 10px 50px;
        }
        .fbbutton{
            background-color: gray;
            
        }
        .facebook{
            text-decoration: none;
            font-size:20px;
            color:white;
            
        }
        .facebook:hover{
            color:blue;
        }
        .facebook i{
            color:blue;
        }
        @media screen and (max-width:1400px){
            .register{
                font-size:20px;
            }
            .facebook{
                font-size:20px;
            }
        }
        @media screen and (max-width:992px){
            .register{
                font-size:15px;
            }
            .container{
                width:70%;
            }
            .facebook{
                font-size:15px;
            }
            .or{
                font-size:10px;
            }
        }
        @media screen and (max-width:400px){
            .register{
                font-size:12px;
            }
            .container{
                width:70%;
            }
            .facebook{
                font-size:15px;
            }
            .or{
                font-size:10px;
            }
        }

    </style>
</head>
<body>
  <div class="container-cover">
    <div class="container text-center">
        <h3 class="register">Welcome to our register page, Registration here properly.</h3>
        <button class="btn btn-light fbbutton"><a href="#" class="facebook"><i class="fa-brands fa-facebook"></i>Register with Facebook</a></button>
        <p class="or">------------OR-------------</p>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-floating">
                <input type="email" name="email" class="form-control" placeholder="email" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="text" placeholder="name" name="name" class='form-control' required>
                <label for="name">Fullname</label>
            </div>
            <div class="form-floating">
                <input type="text" placeholder="phonenumber" name="number" class='form-control' required>
                <label for="number">Phone Number</label>
            </div>
            Gender: <input type="radio" value="Male" name="gender">Male
            <input type="radio" value="Female" name="gender">Female
            <div class="form-floating">
                <input type="password" class="form-control" placeholder='password' name="password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" placeholder='rpassword' name="rpassword">
                <label for="rpassword">Re-type Password</label>
            </div>
            <input type="submit" class="btn btn-outline-success submit" value="Register" name="submit">
        </form>
        <p class="text-center mt-3">Already have an account? <a href="login.php">Login now</a></p>

        </div>
  </div>
</body>
</html>
<?php
include 'server.php';
if (isset($_POST['submit'])){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $phone=$_POST['number'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $npassword=password_hash($password, PASSWORD_BCRYPT);
    $rpassword=$_POST['rpassword'];
    $semail="select *from userlogin where email='$email'";
    $csemail=mysqli_query($con,$semail);
    $countemail=mysqli_num_rows($csemail);
    $token=bin2hex(random_bytes(15));
    if($countemail>0){
        ?>
        <script>
            alert("Email already exist!")
        </script>
        <?php
    }else{
        if(password_verify($rpassword, $npassword)){
            $insert="insert into userlogin (email,name,phone,gender,password,token,status) values ('$email', '$name', '$phone', '$gender', '$npassword', '$token', 'inactive')";
            $insertquery=mysqli_query($con,$insert);
            if($insertquery){
                $to_email=$email;
                $subject="Account Activation";
                $message=" Hi $name, click here to activate your account: http://localhost/php/Web%20Development%20Project/activate.php?token=$token";
                $headers="From: borshon.k.2004@gmail.com";
                if(mail($to_email,$subject,$message,$headers)){
                    $_SESSION['msg']="Check your email for activate your account $email";
                    ?>
                    <script>
                        location.replace("login.php");
                    </script>
                    <?php
                }
                ?>
                <?
            }else{
                ?>
                <script>
                    alert("Uploading failed");
                </script>
                <?php
            }
        }else{
            ?>
            <script>
                alert("Password didn't match");
            </script>
            <?php
        }
    }

}
?>