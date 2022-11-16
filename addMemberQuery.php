<?php
session_start();
ob_start();
include 'connection.php';



// photo upload


$target_dir = "image/user/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
if($target_dir==$target_file){
    $target_file="image/user/noImage";
}



// photo upload ends here

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$photos=$target_file;


$sql_tab="SELECT * FROM members WHERE email='$email'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;

$sql_tab="INSERT INTO members (account_id,name, mobile_number, email, profileImage)  values ('$_SESSION[id]','$name','$mobile','$email','$photos')";

mysqli_query($con,$sql_tab);
$message = "Memebr Added ";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'membersList.php';

</script>
";









?>