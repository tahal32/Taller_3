<?php  
 require('db_connect.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

$query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "<script type='text/javascript'>alert('inicio de sesión exitoso')</script>";

}else{
echo "<script type='text/javascript'>alert('inserte la datos correctos')</script>";
}
}
?>