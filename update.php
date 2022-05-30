<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Blaka&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <title>update products</title>
</head>
<body>
    <?php
    include('config.php');
    $ID= $_GET['id'];
    $up = mysqli_query($con , "select * from prod where id=$ID");
    $data = mysqli_fetch_array($up);
    
    
    
    ?>
    <center>
        <div class="main">
            <form action='up.php' method="POST" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" (( لرفع الصورة))-->
                <h2>تعديل المنتجات</h2>
                <img src="img/logoo.png" alt="logo" width="350x" />
<br>
                <input type="text" name="id" value='<?php echo $data ['id']?>'>
                <br>
                <input type="text" name="name" value='<?php echo $data ['name']?>'>
                <br>
                <input type="text" name="price" value='<?php echo $data ['price']?>'>
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <br>
                <label for="file">تحديت صورة</label>
                <button name="update" type="submit">تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرص كل المنتجات</a>
            </form>
        </div>
        <p>Developer by : marouan anouar</p>
    </center>
    
</body>
</html>