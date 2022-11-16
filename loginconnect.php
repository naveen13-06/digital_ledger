<?php
ob_start();//to store the outputs to buffer
session_start();
include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];



$sql_tab="SELECT * FROM userdetail WHERE email='$email' AND password='$password'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;
if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{


$id = $row['id'];
$userName=$row['userName'];
$email=$row['email'];
$mobile=$row['Mobile'];

}
header ("location: membersList.php");
$_SESSION['id']=$id;


$_SESSION['userName']=$userName;


$_SESSION['email']=$email;


$_SESSION['mobile']=$mobile;


// echo $userName;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $mobile;echo "<br>";
// echo $id;
// echo "<br>";
// echo $_COOKIE['mobile'];

}


else
{
	$message = "sorry the E-mail and password does not exist";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'index.php';

</script>
";

}


?>