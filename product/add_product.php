<?php

//validation

//connect to DB
$dbc = new mysqli('localhost', 'root', '', 'project');

//create insert query
mysqli_query($dbc, "SET NAMES utf8");
$sql = "INSERT INTO products(name, price, category, caption, picture, pdf, stock, date)
        VALUES('{$_POST['name']}', '{$_POST['price']}', '{$_POST['category']}', '{$_POST['caption']}' , '../picture/4.png' ,' ' , ' ', ' ', ' ')";

//execute query
$result = $dbc -> query($sql);

if( $dbc -> error )
    echo($dbc->error);
else
    echo ('<br/>'."محصول با موفقیت اضافه شد");

//close connection
$dbc -> close();
?>