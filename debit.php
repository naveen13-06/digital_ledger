<?php
ob_start();
include 'connection.php';
session_start();
$userId=$_GET['nm'];

// fetching the user detail current user details
$sql_tab="SELECT * FROM members where id='$userId'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);

if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{


$id = $row['id'];

$userName=$row['name'];

$email=$row['email'];
$mobile=$row['mobile_number'];
$profileImage=$row['profileImage'];

}//closing while

}//closiung if

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    
	<title>Add Debit | Ledger</title>
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="icon" href="image/icon.png">
<style type="text/css">
	.main-Box{
		
		padding: 10px;
		margin: 30px 10px 10px 10px;
		

	}


</style>
</head>
<body style="background-color:#0080f0; color: white;padding-top: 50px;" >

	<div class="row" style="width: 100%; margin-top: 20px; margin:auto; width :50%;">
		
		<div class="col-2">
	<img src="image/icon.png" width="50" height="50" style="border-radius: 50px; border: 1px solid #efefef;"> 
</div>
<div class="col-1">
			</div>
				<div class="col-2">
	<i class="fa fa-long-arrow-right" style="font-size: 25px; margin-top: 10px; margin-right: 15px; margin-left: 15px; " aria-hidden="true"></i>  
	</div>
	<div class="col-1">
			</div>
			<div class="col-2">
	<img src="<?php echo $profileImage ?> "width="50" height="50" style="border-radius: 50px; border: 1px solid #efefef;" >
</div>
</div>
<br>
	<p style="font-size: 14px; text-align: center; margin-top: 0px; margin-inline: auto;">Paying <?php echo $userName ?></p>

	<div class="container">
	<form style="margin:0px; " type="post" action="debitEntry.php">
		<input type="text" name="amount" placeholder="0"  style="background-color: #0000; color: white; border: 0px transparent; font-size: 60px;text-align: center;width: 100%; ">

		<input type="text" name="reason" placeholder="what is this for?"  style="  color: black; border: 0px transparent; font-size: 18px;text-align: center;width: 70%;border-radius: 20px; margin: 0px 0px 0px 50px; padding: 20px; background-blend-mode: darken;" >
		
		<select id="inputState" name="nm" class="form-control " style="display: none;">
        <option selected><?php echo $userId ?></option>
        
         </select>
		<br><br>

		<button type="submit" class="btn btn-light btn-lg btn-block" style="margin-top: 20px;   margin: auto;
  width: 50%;" >Add Bill</button>
	</form>
</div>









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>