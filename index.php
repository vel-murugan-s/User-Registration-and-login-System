<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
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
        <form action="includes/register.php" method="post">
            
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="container">
  <div class="row">
            <div class="form-group col-sm-12">
                <h2 style="text-align: center;">Welcome <?php echo $_SESSION['name'];?></h2>
                <h5 style="text-align: center;"><?php echo $_SESSION['login'];?></h5>
            </div>
        </div>
    </div>
        </form>
        <div class="social-media">
            <a class="btn btn-info" href="logout.php"><h5>Logout</h5></a>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
<?php } ?>