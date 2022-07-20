<?php
error_reporting(0);
// $host = "localhost";
// $user_host = "simpati_user";
// $pass_host = "x35yH4#v";
// $db_host = "admin_simpati";
$base_url = "localhost/uts";
$host = "localhost";
$user_host = "root";
$pass_host = "";
$db_host = "uts_proweb";
$konek=mysqli_connect("$host","$user_host","$pass_host","$db_host");

if($konek){
    //
}else {
    header('location:'.$base_url.'error-db');
}
?>