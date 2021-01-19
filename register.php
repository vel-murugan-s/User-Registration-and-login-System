<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $phonenumber=$_POST['phonenumber'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $password=$_POST['password'];
    $enc_password=$password;
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    header("Location: register.php?error=Email id already exist with another account. Please try with other email id");
                exit();
} else{
    $msg=mysqli_query($con,"insert into users(username, email, date,phonenumber, gender, city, password) values('$username', '$email', '$date', '$phonenumber', '$gender','$city', '$password')");

if($msg)
{
    header("Location: register.php?success=Register successfully ");
                exit();
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="registration-form">
        <form name="registration" method="post" action="" enctype="multipart/form-data">
            <div class="form-group col-sm-12">
                <h3 style="text-align: center">Sign Up</h3>
            </div>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error alert alert-danger " style="text-align: center;"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success alert alert-success" style="text-align: center;"><?php echo $_GET['success']; ?> <a href="login.php">Login Here</a></p>
        <?php } ?>
  <div class="row">
            <div class="form-group col-sm-12">
                <input type="text" class="form-control item" name="username" id="username" placeholder="Name" required>
            </div>
            <div class="form-group col-sm-12">
                <input type="text" class="form-control item" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control item" name="date" id="birth-date" placeholder="Birth Date" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control item" name="phonenumber" id="number" placeholder="Phone Number" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control item" name="gender" id="gender" placeholder="Gender" required>
            </div>
            <div class="form-group col-sm-6">
                <input type="text" class="form-control item" name="city" id="city" placeholder="City" required>
            </div>
            <div class="form-group col-sm-12">
                <input type="password" class="form-control item" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group col-sm-12">
                <input type="submit" name="signup" class="btn btn-block create-account" value="Register">
                
            </div>
        </div>

        </form>
        <div class="social-media">
            <h5>Have an account?<a href="login.php"> Login Here</a></h5>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
