<?php

if (isset($_GET['id']))
    $id = $_GET["id"];

//validation

//connect to DB
$dbc = new mysqli('localhost', 'root', '', 'project');
$dbc -> set_charset("utf8mb4");
if (isset($_POST['product-name']) and isset($_POST['category']) and isset($_POST['price']) and isset($_POST['caption'])){
    $name = $_POST['product-name']; 
    $category = $_POST['category'];
    $price = $_POST['price'];
    $caption = $_POST['caption'];
    $sql = "UPDATE products SET name='$name', price='$price', category='$category', caption='$caption' WHERE id='$id'";
    $dbc->query($sql);
if( $dbc -> error )
    echo($dbc->error);
else{
    echo ('<br/>'."محصول با موفقیت به روز رسانی شد");
}
}


//create insert query


$sql = "SELECT * FROM products WHERE id = '$id'";



//execute query
$result = $dbc -> query($sql);

if( $dbc -> error )
    echo($dbc->error);
else{
    $row = $result -> fetch_array();
    $nameProduct = $row['name'];
    $category = $row['category'];
    $price = $row['price'];
    $caption = $row['caption'];
}



include("edit_product.php");
//close connection
$dbc -> close();
?>