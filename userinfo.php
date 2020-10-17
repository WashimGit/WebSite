<?php

$con=mysqli_connect('localhost','root');

if($con){
    echo "successful";

}
else
{
    echo "invalid";
}

mysqli_select_db($con, 'websitedemo');

$user = $_POST['user'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Comment = $_POST['Comment'];

$query = " insert into userinfodata (user,Email,Mobile,Comment) values ('$user','$Email','$Mobile','$Comment') " ;

mysqli_query($con, $query);

header('location:index.php'); 

?>