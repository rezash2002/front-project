<?php


//connect to DB
$dbc = new mysqli('localhost', 'root', '', 'project');
$dbc -> set_charset("utf8mb4");

//create query
$sql = "SELECT * FROM products";

//execute query
$result = $dbc -> query($sql);

if( $dbc -> error )
    echo($dbc->error);
else{
    $rows = $result -> fetch_all();
    include("product_card_view.php");
}

//close connection
$dbc -> close();

?>