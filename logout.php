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

	echo $name;
	echo $email;

}

 ?>	
<form method="POST">
<button class="btn bt-primary" name="logout">Log Out</button>
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


