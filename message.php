<?php
include_once('includes/connection.php');

$subject = "";
$position = "";
$fullname = "";
$email = "";
$phone = "";
$message = "";
$terms = "";
$post = "";
$subjectErr = "";
$fullnameErr = "";
$phoneErr = "";
$messageErr = "";
$termsErr = "";
$emailErr = "";
$invalidEmail = "";
$termsErr = "";


if(isset($_POST['submit'])){

$subject = mysqli_real_escape_string($db, $_POST['Subject']);
$position = mysqli_real_escape_string($db, $_POST['Position']);
$fullname = mysqli_real_escape_string($db, $_POST['Fullname']);
$email = mysqli_real_escape_string($db, $_POST['Email']);
$phone = mysqli_real_escape_string($db, $_POST['Phone']);
$message = mysqli_real_escape_string($db, $_POST['Message']);
$terms = mysqli_real_escape_string($db, $_POST['Terms']);


if($subject == ""){
    $subjectErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
}

if($position == ""){
    $position = 'Not an Application';
}

if($fullname == ""){
    $fullnameErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
}    

if($phone == ""){
    $phoneErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
}    

if($message == ""){
    $messageErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
}    

if($_POST['Terms'] != "Accepted"){
    $termsErr = '<div class="error-msg">Please check the box above!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
}    

if($email == ""){
    $emailErr = '<div class="error-msg">Please fill out form!<span class="error-msg-icon fas fa-exclamation-circle"></span></div>';
}   

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $invalidEmail = "<div class='error-msg'>" . $email . " not a valid email address!<span class='error-msg-icon fas fa-exclamation-circle'></span></div>";
}    




if(!$subjectErr && !$fullnameErr && !$phoneErr && !$messageErr && !$termsErr && !$emailErr && !$invalidEmail){
    $post = "https://formspree.io/f/xeqdebya";
}elseif($subjectErr || $fullnameErr || $phoneErr || $messageErr || $termsErr || $emailErr || $invalidEmail){
    $post = "#form-container";
}    



}


?>