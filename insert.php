<?php

include('config.php');

if(isset($_POST['upload'])){

    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMG = $_FILES['image'];


    # رفع الصور 

    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up ="images/". $image_name;

    # ارسال الملفات
    
    $insert= "insert into prod (name , price,img) values ('$NAME','$PRICE','$image_up')";
    mysqli_query($con,$insert);

    if(move_uploaded_file($image_location,'images/'. $image_name)){
        echo "<script>alert('تم الرفع بنجاح')</script>";
    }else{
        echo "<script>alert('لقد حدت مشكل في رفع الملف')</script>";
    }
    header('location: index.php');







}





?>