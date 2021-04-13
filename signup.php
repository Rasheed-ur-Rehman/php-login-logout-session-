<?php 
include'config.php';

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registration Page For Session and Cookie</title>
 	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </head>
 <body>
 	<form method="POST" action="">
 		<table class="table">
 			<tr>
 		<td>Name : <input type="text" name="name"></td>
 		<td>Email: <input type="text" name="email"> </td>
 		<td>Password :<input type="Password" name="pass"></td>
 		<td>gender <input type="text" name="gender"></td>

         </tr>

        </table>
                 <button class="btn btn-primary" name="signup">SignUp</button>
                 <button class="btn btn-primary">Login</button>

 	</form>
 
 </body>
 </html>

 <?php 
if (isset($_POST['signup'])) {
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$gender=$_POST['gender'];


$sql="INSERT INTO `signup`(`Name`, `Email`, `password`, `gender`) VALUES ('$name' ,'$email' , '$password' , '$gender')";
$result=mysqli_query($con,$sql);

if ($result) {
	header('location:login.php');
}


}

  ?>