<?php
include 'connection.php';

$p = $_REQUEST['id'];

$del_p = "delete from collaborators where id = $p";
$result_p =mysqli_query($connect,$del_p);


if($result_p ){
    header('location:collaborator_details_view.php');
 }
?>