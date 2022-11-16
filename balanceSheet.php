<?php
ob_start();
include 'connection.php';
session_start();
$userId=$_GET['nm'];

// fetching the user detail current user details
$sql_tab="SELECT * FROM members where id='$userId'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
$sum=0;
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
    <title>Balance Sheet | Ledger</title>
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<link rel="icon" href="image/icon.png">
<style type="text/css">
	.credit-Box{
		color: black;
		border-radius: 20px;
		border: 1px solid #e8e8e8;
		width: auto;
		background-color: #e8e8f5;
		margin: 10px 0px 0px 10px;
	}

	.debit-Box{
		color: black;
		border-radius: 20px;
		border: 1px dashed #e8e8e8;
		width: auto;
		background-color:white;
		margin-right: 10px;
		/*margin: 10px 0px 0px 10px;*/
	}


</style>
<body style="background-color: ghostwhite;">
<!-- navbar -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php"><img src="image/icon.png" height="50" width="50" style="margin-right: 2%"> Ledger</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="membersList.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addMember.php">Add Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        
      </div>
    </nav>
<!-- user name -->
<div class="container " style="margin-top: 80px; position: fixed;background-color: white;">

<div class="row">
	<!-- profile picture -->
	<div class="col-2">
		<img src="<?php  echo $profileImage; ?>" width="50" height="50" style="border-radius: 20px;">
	</div>


	<!-- profile Name -->
	<div class="col-7">
		<p style="padding-top: 0px; font-size: 20px; margin: 0px;"><?php  echo $userName; ?></p>
		<p style=" font-size: 12px;"><?php  echo $mobile; ?></p>
</div>
	<!-- call button -->
	<div class="col-3" align="center">
		<a href="tel:<?php  echo $mobile; ?>" class="text-success"> 
			<i class="fa fa-phone-square" aria-hidden="true" style="font-size: 50px"></i>
		</a>
</div>
</div>
<hr style="margin: 0px;">
</div>

<!-- transactions box -->
<div class="container" style="margin-bottom: 70px; padding-top: 150px;">
	<?php
// fetching the user list
$sql_tab="SELECT * FROM transaction where id='$userId'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);

if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{


$id = $row['id'];
$transactionAmount = $row['amount'];
$transactionResaon = $row['reason'];
$transactionDate = $row['date'];
$sum+=$transactionAmount;
?>



<div class="row">
<div class="container debit-Box">
	<div style="display: flex;margin-bottom: 0px;"> 
	<p style="padding-top: 10px; padding-right: 10px; margin-bottom: 5px;">&#8377;  </p><h2 style="margin-bottom: 5px;"><?php echo $transactionAmount ?></h2>
	</div>
	<p style="font-size: 14px; margin-bottom: 5px;"><?php echo $transactionResaon ?></p>
	<p style="font-size: 14px;"><i class="fa fa-long-arrow-left" aria-hidden="true"> </i> Bill 
<?php echo $transactionDate ?></p>
</div>
</div>
	
<?php

}//closing while

}//closiung if

?>
<div class="row" style>
<div class="container debit-Box">
	<div style="display: flex;margin-bottom: 0px;"> 
	<p style="padding-top: 10px; padding-right: 10px; margin-bottom: 5px;">&#8377;  </p><h2 style="margin-bottom: 5px;">sum:<?php echo $sum ?></h2>
	</div>
</div>
</div>
</div>

<!-- <?php
?> -->
<!-- <div style="text-align:right; margin-right:18%">
	<h3>sum:
	<?php
	echo $sum; 
	?>
	</h3>
</div> -->
<!-- base buttons -->
<div class="baseButton fixed-bottom container" style="padding-bottom: 20px; padding-top: 10px; background-color: #fff;">
  <div class="row">
<!-- debit -->
<div class="col-12">
	<?php
	echo "<a href=debit.php?nm=".$id."";?>
    <button type="button" class="btn btn-danger btn-block"><i class="fa fa-arrow-up" aria-hidden="true"></i> Debit</button>
    <?php echo "</a>" ?>
  </div>

  </div>
</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
