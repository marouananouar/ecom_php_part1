<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Blaka&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <title>Ecom shop</title>
</head>
<body>
    <center>
        <div class="main">
            <form action='insert.php' method="POST" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" (( لرفع الصورة))-->
                <h2>موقع تسويقي اون لاين</h2>
                <img src="img/logoo.png" alt="logo" width="350x" />
<br>
                <input type="text" name="name">
                <br>
                <input type="text" name="price">
                <br>
                <input type="file" id="file" name="image" style="display: none;">
                <label for="file">ارفع صورة</label>
                <button name="upload">رفع المنتج</button>
                <br><br>
                <a href="products.php">عرص كل المنتجات</a>
            </form>
        </div>
        <p>Developer by : marouan anouar</p>
    </center>
    
</body>
</html>