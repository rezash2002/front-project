<?php

if (isset($_GET['id']))
    $id = $_GET["id"];

//validation

//connect to DB
$dbc = new mysqli('localhost', 'root', '', 'project');
$dbc -> set_charset("utf8mb4");
if (isset($_POST['fullname']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['ConfirmPassword'])){
    $fullname = $_POST['fullname']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "UPDATE users SET fullname='$fullname', email='$email', password='$password' WHERE id='$id'";
    $dbc->query($sql);
if( $dbc -> error )
    echo($dbc->error);
else{
    echo ('<br/>'."پروفایل با موفقیت به روز رسانی شد");
}
}


//create query
$sql = "SELECT * FROM users WHERE id = '$id'";



//execute query
$result = $dbc -> query($sql);

if( $dbc -> error )
    echo($dbc->error);
else{
    $row = $result -> fetch_array();
    $fullname = $row['fullname'];
    $email = $row['email'];
    $password = $row['password'];
}



include("edit_profile.php");
//close connection
$dbc -> close();
?>