<?php

//validation

//connect to DB
$dbc = new mysqli('localhost', 'root', '', 'project');

//create insert query
mysqli_query($dbc, "SET NAMES utf8");
$sql = "INSERT INTO users(fullname, email, password)
        VALUES('{$_POST['signup_fullname']}', '{$_POST['signup_email']}', '{$_POST['signup_password']}')";

//execute query
$result = $dbc -> query($sql);

if( $dbc -> error )
    echo($dbc->error);
else
    echo ($_POST['signup_fullname'].'<br/>'." ثبت نام شما با موفقیت انجام شد");

//close connection
$dbc -> close();
?>
