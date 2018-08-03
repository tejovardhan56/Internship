<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="AdminLogin.css">
<body>
    <div class="loginbox">
    <img src="" class="avatar">
        <h1>Admin Login</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>Username</p>
            <input type="text" name="Username" placeholder="Enter Username" id="Username">
            <p>Password</p>
            <input type="password" name="Password" placeholder="Enter Password">
            <input type="submit" name="submit" value="submit">
        </form>
        
    </div>

</body>
</head>
</html>



<?php
include ("connection.php");
session_start();

if(isset($_POST['submit']))
{
   
$user=$_POST['Username'];
$pass=$_POST['Password'];

$query="select * from Admin where Username='$user' && Password='$pass'  ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total==1)
{
    $_SESSION['Username']=$user;
    header('location:Dashboard.php');
}
else
{
  echo "Don't Hurry!!! Please Enter correct details";
}

}

?>

