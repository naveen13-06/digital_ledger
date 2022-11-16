<?php
session_start();
include 'connection.php';



// photo upload

$record="SELECT * FROM members";
$re1=mysqli_query($con,$record);
$re2=mysqli_num_rows($re1);
$re3=$re2+1;

$target_dir = "image/user/";

$target_file = $target_dir . basename($re3);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($re3["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($re3 > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($re3["tmp_name"], $target_file)) {
        echo "The file ". basename( $re3). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



// photo upload ends here

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$photos="image/user/". $re3;


$sql_tab="SELECT * FROM members WHERE email='$email'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;
if ($a>0){
$message = "Sorry But This Email Id Already Used By Some User Please Provide Different Email";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'addMember.php';

</script>
";

}
  
else{
$sql_tab="INSERT INTO members (name, mobile_number, email, profileImage)  values ('$name','$mobile','$email','$photos')";

mysqli_query($con,$sql_tab);
$message = "Memebr Added ";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'addMember.php';

</script>
";



}





?>