<?php
ob_start();
session_start();
include 'connection.php';
$userId=$_GET['nm'];
$id=$userId;
$amount = $_GET['amount'];
$reason = $_GET['reason'];
echo $userId;
echo "<br>";
echo $amount;
echo "<br>";
echo $reason;

$sql_tab="INSERT INTO transaction( id, amount, reason) VALUES ('$userId','$amount','$reason')";

mysqli_query($con,$sql_tab);
$sql_tab="SELECT email FROM members WHERE id=$userId";
$ans=mysqli_query($con,$sql_tab);
$a=mysqli_fetch_assoc($ans);


// echo "<script type='text/javascript'>
// // window.location= 'balanceSheet.php?nm=$id;
// </script>";
// Account details

	// Authorisation details.
    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");


    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 1; 
    $mail->Port = 465 ; //465 or 587

     $mail->SMTPSecure = 'ssl';  
    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "naveensachin2002@gmail.com";
    $mail->Password = "menczeybjqnhwwgu";

    //Set Params
    $mail->SetFrom("foo@gmail.com","Ledger");
    $mail->AddAddress($a['email']);
    $mail->Subject = "Bill Added";
    $mail->Body = "Your bill amount of ".$amount." for ".$reason." have been added to your account";


     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
     
    header("Location: balanceSheet.php?nm=".$id."");
?>


