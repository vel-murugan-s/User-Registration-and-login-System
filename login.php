<?php session_start();
require_once('dbconnection.php');
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$email=$_POST['email'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="index.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['username'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
    header("Location: login.php?error=Invalid username or password");
                exit();
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form">
        <form name="login" action="" method="post">
            
            <div class="form-group col-sm-12">
                <h3 style="text-align: center">Login</h3>
            </div>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error alert alert-danger " style="text-align: center;"><?php echo $_GET['error']; ?></p>
        <?php } ?>
  <div class="row">
            <div class="form-group col-sm-12">
                <input type="text" class="form-control item" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group col-sm-12">
                <input type="password" class="form-control item" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group col-sm-12">
                <input type="submit" name="login" class="btn btn-block create-account" value="Login">
                
            </div>
        </div>
        </form>
        <div class="social-media">
            <h5>Don't have an account?<a href="register.php"> Register Here</a></h5>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
