<?php

$conn=mysqli_connect('localhost','root','','courier');
if($conn){
    $query="delete from couriers where c_id=".$_GET['id']."";
    $res=mysqli_query($conn,$query);
    if($res){
        echo "<script>alert('Delete courier successfully....');window.location.href='dashboard.php';</script>";
    }
}







?>
