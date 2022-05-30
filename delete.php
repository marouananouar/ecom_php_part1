<?php
include('config.php');
$ID = $_GET['id'];
mysqli_query($con , "delete from prod where id=$ID");
header('location: products.php');





?>