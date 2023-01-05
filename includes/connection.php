<?php

$db_host = "localhost";
//$db_name = "lambert2_website_db";
$db_name = "lambert_website_db";
//$db_user = "lambert2_website_user";
$db_user = "root";
//$db_password = "Youaregreat@1";
$db_password = "";

$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(!$db){
    die('Sorry, we are currently unable to connect to the database!');
}


?>