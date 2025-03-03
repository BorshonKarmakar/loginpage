<?php
session_start();
include 'server.php';
if(isset($_GET['token'])){
    $token=$_GET['token'];
    $update_query="update userlogin set status='active' where token='$token'";
    $query_connect=mysqli_query($con,$update_query);
    if($query_connect){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg']="Account updated successfully.";
            ?>
            <script>
                location.replace("login.php");
            </script>
            <?php
        }else{
            $_SESSION['msg']="You are logged out.";
            ?>
            <script>
                location.replace("login.php");
            </script>
            <?php
        }
    }else{
        $_SESSION['msg']="Account not updated";
        ?>
        <script>
            location.replace("register.php");
        </script>
        <?php
    }
}
?>