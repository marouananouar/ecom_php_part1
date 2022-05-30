<?php

include('config.php');

if(isset($_POST['update'])){

    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMG = $_FILES['image'];
    $ID = $_POST['id'];


    # رفع الصور 

    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up ="images/". $image_name;

    # ارسال الملفات
    
    $update= "update prod set name='$NAME', price='$PRICE', img='$image_up' where id=$ID";
    mysqli_query($con,$update);

    if(move_uploaded_file($image_location,'images/'. $image_name)){
        echo "<script>alert('تم التحديت بنجاح')</script>";
    }else{
        echo "<script>alert('لقد حدت مشكل في رفع الملف')</script>";
    }
    header('location: index.php');







}





?>