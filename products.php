<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@1,700&family=Blaka&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products shop</title>
    <style>
        h3{
            font-family: 'Amiri', serif;
            font-weight: bold;
            margin-top: 10px;
        }
        .card{
            float: right;
            margin:20px 10px 0 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 70%;
        }
        a{
            margin-bottom: 5px;
        }
        

    </style>
</head>
<body>
<center>
 <h3> جميغ المنتجات المتوفرة</h3>
</center>
<?php
include('config.php');
$result = mysqli_query($con, "select * from prod");

while ($row = mysqli_fetch_array($result)){

    echo"
     <center>
     <main>
       <div class='card' style='width: 15rem;'>
          <img src='$row[img]' class='card-img-top'>
          <div class='card-body'>
              <h5 class='card-title'>$row[name]</h5>
               <p class='card-text'>$row[price]</p>
             <a href='delete.php? id=$row[id]' class='btn btn-danger'>حدف</a>
             <a href='update.php? id=$row[id]' class='btn btn-primary' >تعديل</a>
           </div>
        </div>
      </main>
     
     </center>
    
    ";
}




?>

    
</body>
</html>