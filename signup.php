<?php
include 'connection.php';

$signin = $_REQUEST['signin'];

echo '<pre>';
print_r($_FILES);

if($signin == 1){
    $sign = 'visitor';
    
$photo_array = $_FILES['image'];
$photo_name = time().$photo_array['full_path'];
$detination = 'visitor_image/'.$photo_name;
move_uploaded_file($photo_array['tmp_name'],$detination);

}
else if($signin == 2){
    $sign = 'collaborators';
    
$photo_array = $_FILES['image'];
$photo_name = time().$photo_array['full_path'];
$detination = 'collaborators_image/'.$photo_name;
move_uploaded_file($photo_array['tmp_name'],$detination);

}
else if($signin == 3){
    $sign = 'admin';
    
$photo_array = $_FILES['image'];
$photo_name = time().$photo_array['full_path'];
$detination = 'admin_image/'.$photo_name;
move_uploaded_file($photo_array['tmp_name'],$detination);

}


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
//$collaborators = 'collaborators' ;

echo $ins_stmt = "INSERT INTO `$sign`(id,name,email,dob,gender,phone,address,image,pass,organisation) 
VALUES (null,'$name','$email','$dob','$gender','$phone','$address','$photo_name','$password','$org')";

$result = mysqli_query($connect,$ins_stmt);


//echo $signin;
//echo $sign;
//exit;

if($result){
    header('location:index.php');
    if($signin == 1){
        header('location:visitor_details_view.php');
    }
    if($signin == 2){
        header('location:collaborators_details_view.php');
    }
    else if($signin == 3){
        header('location:admin_details_view.php');
    }
    
}

?>