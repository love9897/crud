<?php
include './dbcon.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "Delete from crudop where id = '$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }

}
?>