<html>
	<head>
		<title> Admin Page</title>
	</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<fieldset>
			User-Name
			<input type="text" name="Username" id="Username"><br><br>
			Password
			<input type="password" name="Password" id="Password"><br><br>

			<input type="submit" name="submit" value="submit"><br>

		</fieldset>
	</form>
</body>
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