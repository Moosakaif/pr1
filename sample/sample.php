<?php

$conn=mysqli_connect('localhost','root','','courier');
if($conn){
    $query="select * from couriers";
    $res=mysqli_query($conn,$query);
    if($res){
        $rows=mysqli_num_rows($res);
        echo $rows;
        // while($data=mysqli_fetch_assoc($res)){

        // }

    }
}


?>