<?php

//connect to DB
$dbc = new mysqli('localhost', 'root', '', 'project');

//create insert query
mysqli_query($dbc, "SET NAMES utf8");
$sql = "INSERT INTO messages(fullname, title, email, body) 
        VALUES('{$_POST['fullname']}', '{$_POST['title']}',  '{$_POST['email']}', '{$_POST['body']}')";

//execute query
$result = $dbc -> query($sql);

if( $dbc -> error )
    echo($dbc->error);
else
    echo('پیام شما با موفقیت دریافت شد');
    
//close connection
$dbc -> close();

?>