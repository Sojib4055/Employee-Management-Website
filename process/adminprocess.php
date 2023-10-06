<?php

require_once ('conndatabase.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `adminlogin` WHERE Email = '$email' AND Password = '$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) ==1){
	header("Location: ..//adminpage.php");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>