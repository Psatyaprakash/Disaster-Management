<?php
session_start();

include 'connection.php';


$email = $_REQUEST['log_email'];
$password = $_REQUEST['log_password'];

$signin = $_REQUEST['signin'];

if($signin == 1){
    $sign = 'visitor';
}
else if($signin == 2){
    $sign = 'collaborators';
}
else if($signin == 3){
    $sign = 'admin';
}

$check_qry = "SELECT * FROM  $sign where email='$email' and pass = '$password' ";
$result = mysqli_query($connect,$check_qry);
$rows_returned = mysqli_num_rows($result);



if ($rows_returned == 1){
    $row = mysqli_fetch_array($result);
    $_SESSION['name'] = $row['name'];
   
    $_SESSION['loggedin'] = true ;
    if($signin == 1){
        $_SESSION['sign'] = 'visitor';
    }
    else if($signin == 2){
        $_SESSION['sign'] = 'collaborators';
    }
    else if($signin == 3){
        $_SESSION['sign'] = 'admin';
    }
    echo 'successfully loggedin';

   
    header('location:user.php');

}
else{
    $_SESSION['loggedin'] = false;
    ?>'<script>alert("Invalid username or Password")</script>';
    <div style="height:100%; width:100%; background-color: #000; color:red; text-align:center;padding:10%; font-weight:heavy; font-size: 10em;">
        ERROR
    </div>
<?php
}
?>