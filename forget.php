<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<h1>Your successfully Login
</h1>

<?php 
ob_start();
session_start();

$username=$_SESSION['name'];
include'config.php';


if ($username==true) {
	
}else{
	header('location:login.php');
}


$img = mysqli_query($con, "SELECT * FROM signup WHERE Email='".$username."'");
if ($row=mysqli_fetch_array($img)) {
	
	$name=$row['Name'];
	$email=$row['Email'];

	echo "Name ".$name;
	echo "<br>";
	echo "Email Id ".$email;

}

 ?>	
<form method="POST">
<button class="btn btn-danger" name="logout">Log Out</button>
</form>

<?php 

if (isset($_POST['logout'])) {

	include'out.php';

}

ob_end_flush();
 ?>

<script type="text/javascript">


	//ajax tutorial programme 
	
document.getElementByid('text');

</script>


