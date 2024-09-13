<?php

$conn=mysqli_connect('localhost','root','','courier');
if($conn){
    $query="delete from agents where a_id=".$_GET['id']."";
    $res=mysqli_query($conn,$query);
    if($res){
        echo "<script>alert('Delete agent successfully....');window.location.href='dashboard.php';</script>";
    }
}







?>
