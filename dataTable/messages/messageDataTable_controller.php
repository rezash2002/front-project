<?php

$dbc = new mysqli('localhost', 'root', '', 'project');
$dbc -> set_charset("utf8mb4");

$sql = "SELECT * FROM messages LIMIT 10";



//execute query
$result = $dbc -> query($sql);

if( $dbc -> error )
    echo($dbc->error);
else{
    $rows = $result -> fetch_All();
    include("messageDataTable_view.php");
}

//close connection

?>