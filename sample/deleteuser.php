<?php

$conn=mysqli_connect('localhost','root','','courier');
if($conn){
    $query="delete from users where id=".$_GET['id']." and  (status='1' or status='2')";
    $res=mysqli_query($conn,$query);
    if($res){
        echo "<script>alert('Delete record successfully....');window.location.href='dashboard.php';</script>";
    }
}







?>
