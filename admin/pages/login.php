<?php
session_start();
if (strlen($_SESSION['id']==0)) {
require_once('db/dbconnection.php');

if(isset($_SESSION['url'])) 
   $url = $_SESSION['url']; // holds url for last page visited.
else 
   $url = "index.php";
    

if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
header("Location: ". $url);
}
else
{
echo ("<script LANGUAGE='JavaScript'>
    window.alert(' Username or Password');
    window.location.href='https://demo.henrydev.org/henrycollege/admin/pages/login.php';
    </script>");
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}

//Code for Forgot Password

if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,password from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not register with us');</script>";	
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Result Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  
  <link rel="stylesheet" href="../css/style.css">
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-transparent text-left p-5 text-center">
              <img src="../images/faces/face13.jpg" class="lock-profile-img" alt="img">
              <form class="pt-5" method="post" action="">
                <div class="form-group">
                  <label for="examplePassword1">Enter Your correct details</label>
                  <input type="email" class="form-control text-center" id="examplePassword1" name="uemail" placeholder="Email Address">
                  <br>
                  <input type="password" class="form-control text-center" id="examplePassword1" placeholder="Password" name="password">
                </div>
                <div class="mt-5">
                  <button class="btn btn-block btn-info  btn-lg font-weight-medium" type="submit" name="login" >Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
</body>

</html>
<?php
  } else{ header("Location: ". $_SESSION['url']);

  }	
?>
