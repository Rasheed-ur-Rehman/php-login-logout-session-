
<!DOCTYPE html>
<html>
<head>
	<title>Login Page </title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<form method="POST" >
<table class="table">
<tr>
	<td>Email <input type="text" name="email"></td>
	<td>Password : <input type="Password" name="pass"></td>
</tr>
</table>
<button class="btn btn-primary" name="login">Login</button>
<button class="btn btn-primary" name ="signup"><a href="signup.php"> SignUp</a></button>
<button class="btn btn-danger"><a href="forget.php"> Forget Password</a></button>
<button class="btn btn-default" name="logout">Logout</button>


</body>
</html>
<?php 
if (isset($_POST['login'])) {
	session_start();
	include'config.php';
	$name=$_POST['email'];
	$password=$_POST['pass'];



	$img = mysqli_query($con, "SELECT * FROM signup WHERE Email='".$name."' and password='".$password."' ");

      if($row = mysqli_fetch_array($img)) {     
       $_SESSION['name']=$name;
       $name1=$row['Name'];
       $email1=$row['Email'];
       $gender1=$row['gender'];
       $password1=$row['password'];

      header('location:logout.php');

    ?>
    <table class="table">
  <tr>
  	<td><?php echo $name1; ?></td>
  	<td><?php echo $email1; ?></td>
  	<td><?php echo $gender1; ?></td>
  	<td><?php echo $password1; ?></td>
  </tr>
  </table>
    <?php

}  else{

	echo " <br> Email or Password Not correct";
}

 }



if (isset($_POST['logout'])) {
	
	session_destroy();
	header('location:logout.php');
}



 ?>
 </form>