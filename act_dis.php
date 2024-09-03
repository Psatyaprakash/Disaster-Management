<?php
include 'connection.php';

echo '<pre>';

$name = $_REQUEST['act_dis_name'];
$place = $_REQUEST['act_dis_place'];
$link = $_REQUEST['act_dis_link'];
$news = $_REQUEST['news'];
$news_link = $_REQUEST['news_link'];

$ins_act = " INSERT INTO `update`(dis_name,dis_place,dis_link,news,news_link) 
VALUES ('$name','$place','$link','$news','$news_link')";
$result_dis = mysqli_query($connect, $ins_act);



/*$ins_news = " INSERT INTO `update`(news,news_link) 
VALUES ('$news','$news_link')";
$result_news = mysqli_query($connect, $ins_news);
*/
if($result_dis){ 
   header('location:user.php'); 
}
?>