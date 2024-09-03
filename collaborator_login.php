<?php
include 'connection.php';

echo '<pre>';

print_r($_FILES);

$photo_array = $_FILES['image'];
$photo_name = time().$photo_array['full_path'];
$detination = 'collaborator_images/'.$photo_name;
move_uploaded_file($photo_array['tmp_name'],$detination);

print_r($_REQUEST);
echo '<pre>';


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$dob = $_REQUEST['dob'];
$gender = $_REQUEST['gender'];
$phone = $_REQUEST['phone'];
$address = $_REQUEST['address'];
//$image = $_REQUEST['image'];
$password = $_REQUEST['password'];
//$confirmPassword = $_REQUEST['confirmPassword'];
$org= $_REQUEST['organisation'];
$comp_name = $_REQUEST['comp-name'];
$comp_link = $_REQUEST['comp-link'];
$collaborators = 'collaborators' ;

$ins_stmt = "INSERT INTO `$collaborators`(id,name,email,dob,gender,phone,address,image,pass,organisation,comp_name,comp_link) 
VALUES (null,'$name','$email','$dob','$gender','$phone','$address','$photo_name','$password','$org','$comp_name','$comp_link')";

$result = mysqli_query($connect,$ins_stmt);




if($result){
   header('location:index.php');
}

?>
