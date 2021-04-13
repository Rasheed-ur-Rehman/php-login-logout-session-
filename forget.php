

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Forget Password</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 </head>
 <body>
 <form method="POST">
 	<table class="table">
 		<tr>
 			<td>Enter Registered Email ID :
 		<input type="text" name="email">
 		New Password : <input type="password" name="password">
 		
 			<button class="btn btn-primary" name="ok">OK</button></td>
 		</tr>
 	</table>

 </form>

 <?php 
 if (isset($_POST['ok'])) {
 	include'config.php';
 	$password=$_POST['password'];
 	$email=$_POST['email'];

$sql="UPDATE `signup` SET `password`='$password' WHERE Email='$email'";
if (mysqli_query($con,$sql)) {

	echo " Password Sucessfully Updated your Email : ".$email;
	?> <button class="btn btn-primary"><a href="login.php"> HOME</a></button><?php 
}else{
	echo "Email not Registered with us ".$email;
	 ?> <button class="btn btn-primary"> <a href="signup.php"> SigN up</a></button> <?php

}

 }

  ?>

 </body>
 </html>