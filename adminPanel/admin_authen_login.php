<?php
 require('db_connect.php');

if (isset($_POST['username']) and isset($_POST['password'])){

// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `login` WHERE `username`='$username' and `password`='$password'";

$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);

if($count==1){

//echo "Login Credentials verified";
$_SESSION['username'] = $username;
			header("Location: index.php");

}else{
echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
//echo "Invalid Login Credentials";
}
}
?>
